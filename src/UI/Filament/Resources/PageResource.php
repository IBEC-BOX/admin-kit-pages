<?php

namespace AdminKit\Pages\UI\Filament\Resources;

use AdminKit\Pages\Models\Page;
use AdminKit\Pages\UI\Filament\Resources\PageResource\Pages;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    use Translatable;

    protected static ?string $model = Page::class;

    protected static ?string $modelLabel = 'Страницу';

    protected static ?string $pluralModelLabel = 'Страницы';

    protected static ?string $navigationGroup = 'Страницы';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('page_title')
                    ->label('Название страницы')
                    ->required(),
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')
                        ->label('Название')
                        ->required()
                        ->lazy()
                        ->afterStateUpdated(
                            function (string $context, $state, callable $set) {
                                if ($context === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }
                        ),

                    Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->required()
                        ->unique(Page::class, 'slug', ignoreRecord: true),

                    Forms\Components\RichEditor::make('content')->label('Контент')->required()->columnSpan(2),
                ])->columns(),
                Forms\Components\TextInput::make('seo_title'),
                Forms\Components\TextInput::make('seo_description'),
                Forms\Components\Checkbox::make('site_display'),
                Forms\Components\Checkbox::make('site_map_index'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Название')->searchable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPage::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getTranslatableLocales(): array
    {
        return config('admin-kit.locales');
    }
}
