<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UpdateResource\Pages;
use App\Models\Update;
use Closure;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use stdClass;

class UpdateResource extends Resource
{
    protected static ?string $model = Update::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")
                    ->reactive()
                    ->afterStateUpdated(
                        function (Closure $set, $state) {
                            $set("slug", Str::slug($state));
                        }
                    )->required(),
                TextInput::make("slug")->disabled(),
                Textarea::make("description"),
                RichEditor::make("detail")->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')->getStateUsing(static function (stdClass $rowLoop): string {
                    return (string) $rowLoop->iteration;
                }),
               TextColumn::make("name")->limit(25)->sortable()->searchable(),
               TextColumn::make("description")->limit(30)->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUpdates::route('/'),
            'create' => Pages\CreateUpdate::route('/create'),
            'edit' => Pages\EditUpdate::route('/{record}/edit'),
        ];
    }
}
