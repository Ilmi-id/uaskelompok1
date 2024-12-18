<?php

namespace App\Filament\Resources;

use App\Models\Data;
use App\Filament\Resources\DataResource\Pages;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DataResource extends Resource
{
    protected static ?string $model = Data::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')
                    ->label('Siswa')
                    ->relationship('student', 'name')
                    ->required(),

                Forms\Components\Select::make('beasiswa_id')
                    ->label('Beasiswa')
                    ->relationship('beasiswa', 'name')
                    ->required(),

                Forms\Components\Select::make('application_status')
                    ->label('Status Aplikasi')
                    ->options([
                        'pending' => 'Pending',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('submission_date')
                    ->label('Tanggal Pengajuan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('student.name')->label('Nama Siswa')->sortable(),
                TextColumn::make('beasiswa.name')->label('Nama Beasiswa')->sortable(),
                TextColumn::make('application_status')->label('Status Aplikasi')->sortable(),
                TextColumn::make('submission_date')->label('Tanggal Pengajuan')->sortable(),
                TextColumn::make('created_at')->label('Dibuat Pada')->dateTime()->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListData::route('/'),
            'create' => Pages\CreateData::route('/create'),
            'edit' => Pages\EditData::route('/{record}/edit'),
        ];
    }
}
