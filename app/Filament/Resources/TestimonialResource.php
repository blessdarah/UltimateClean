<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationGroup = "feedback";

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make("image")->image()->avatar(),
                TextInput::make("author_name")->label("author")->required(),
                TextInput::make("author_company")->label("works at"),
                TextInput::make("author_position")->label("Position"),
                Textarea::make("message")->label("Testimonial")->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("image")
                    ->width(40)
                    ->height(40)
                    ->circular(),
                TextColumn::make("author_name")
                    ->label("author")
                    ->sortable()
                    ->searchable(),
                TextColumn::make("author_company")
                    ->label("works at")
                    ->sortable()
                    ->searchable(),
                TextColumn::make("author_position")
                    ->label("Position")
                    ->limit(30)
                    ->sortable()
                    ->searchable(),
                TextColumn::make("message")
                    ->label("Testimonial")
                    ->limit(30),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
