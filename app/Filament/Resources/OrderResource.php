<?php

namespace App\Filament\Resources;

use App\Enums\OrderEnum;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Infolists\Components\Actions\Action as ActionInfolist;
use Filament\Infolists\Components\RepeatableEntry;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('quantity'),
                Select::make('status')->options(OrderEnum::class)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama Produk')->default('Minyak Jelantah')->disabled(),
                TextColumn::make('quantity'),
                TextColumn::make('status')->badge(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(1)
            ->schema([
                Grid::make()->columns(4)->schema([
                    TextEntry::make('status')->badge(),
                    TextEntry::make('created_at')->label('Tanggal Permintaan')->dateTimeTooltip(),
                ]),
                Section::make('Informasi Pengguna')->columns(3)->schema([
                    TextEntry::make('user.name')->label('Nama Pemesan'),
                    TextEntry::make('user.email')->label('Email Pemesan'),
                    TextEntry::make('phone_number')->label('Nomor Hp'),
                    TextEntry::make('address')->label('Alamat'),
                    TextEntry::make('address_note')->label('Catatan'),
                ]),
                Section::make('Informasi Produk')->columns(4)->schema([
                    TextEntry::make('quantity')->label('Jumlah Yang Ingin Dijual'),
                ]),
                RepeatableEntry::make('orderHistories')->label('Riwayat')->schema([
                    TextEntry::make('title')->label('Judul'),
                    TextEntry::make('message')->label('Pesan')
                ]),
                Actions::make([
                    ActionInfolist::make('approve')
                        ->label('Lakukan Pengecekan Ke Lokasi')
                        ->icon('heroicon-c-check')
                        ->color('success')
                        ->visible(fn ($record) => $record->status == OrderEnum::Pending)
                        ->action(function ($record) {
                            $record->update(['status' => OrderEnum::WaitingForChecking]);
                        })
                        ->requiresConfirmation(),
                ])->fullWidth(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            /*'index' => Pages\ManageOrders::route('/'),*/
            'index' => Pages\ListOrders::route('/'),
            'view' => Pages\ViewOrders::route('/{record}'),
            /*'view' => Pages\ViewRewardClaims::route('/{record}'),*/
            /*'view' => Pages\ViewOrders::route('/{record}'),*/
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
