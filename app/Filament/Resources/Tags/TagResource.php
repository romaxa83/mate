<?php

namespace App\Filament\Resources\Tags;

use App\Filament\Resources\Tags;
use App\Foundations\Enums\EnumHelper;
use App\Modules\Tag\Enums\TagType;
use App\Modules\Tag\Models\Tag;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // настройка url ресурса
    protected static ?string $slug = 'tags';

    public static function form(Form $form): Form
    {
//        dd();

        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                ColorPicker::make('color')
                    ->nullable(),
                Select::make('type')
                    ->options(EnumHelper::listForSelect(TagType::class))
                    ->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('type'),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options(EnumHelper::listForSelect(TagType::class))
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->hiddenLabel(),
                Tables\Actions\DeleteAction::make()->hiddenLabel(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Tags\TagResource\Pages\ListTag::route('/'),
            'create' => Tags\TagResource\Pages\CreateTag::route('/create'),
            'edit' => Tags\TagResource\Pages\EditTag::route('/{record}/edit'),
        ];
    }
}
