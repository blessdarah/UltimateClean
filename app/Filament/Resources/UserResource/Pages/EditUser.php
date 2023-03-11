<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['role_id'] = (int) $data['role_id'];
        // dd($data);
        return $data;
    }

    // protected function beforeFill() {
    //     $record_id = $this->record['original'];
    //     dd($this->record);
    // }

    protected function afterSave(): void
    {
        $role_id = (int) $this->data['role_id'];
        $user_id = $this->data['id']; // alias for model id
        $user = User::find($user_id);
        $result = DB::table('model_has_roles')->where('model_id', $user_id)->first();
        $table = 'model_has_roles';
        $data = [
                    'role_id' => $role_id,
                    'model_type' => "\App\Models\User",
                    'model_id' => $user_id
                ];

        if($result)
        {
            DB::table($table)
                ->where('model_id', $user_id)
                ->where('role_id', $role_id) 
                ->update($data);
        }else {
            DB::table($table)->insert($data);;
        }

        $user->role_id = $role_id;
        $user->save();
    }

    protected function getActions(): array
    {
        return [
            Action::make("delete")->action("delete")->color("danger")->icon("heroicon-o-trash")->size("sm"),
            Action::make("changePassword")
            ->form([
                TextInput::make("new_password")->password()->minLength(6)->rule(Password::default())->label("New password")->required(),
                TextInput::make("new_password_confirm")->password()->required()->rule(Password::default())->same("new_password")->label("Confirm new password")
            ])
            ->icon("heroicon-o-key")
            ->size("sm")
            ->color("secondary")
            ->action(function (array $data) {
                $this->record->update([
                    "password" => Hash::make($data['new_password'])
                ]);
                $this->notify("success", "Password updated successfully");
            })
        ];
    }

    
}
