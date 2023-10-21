<?php

namespace App\Policies;

use App\Models\User;
use App\Models\GalleryAlbum;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryAlbumPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_gallery::album');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GalleryAlbum  $galleryAlbum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, GalleryAlbum $galleryAlbum): bool
    {
        return $user->can('view_gallery::album');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_gallery::album');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GalleryAlbum  $galleryAlbum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, GalleryAlbum $galleryAlbum): bool
    {
        return $user->can('update_gallery::album');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GalleryAlbum  $galleryAlbum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, GalleryAlbum $galleryAlbum): bool
    {
        return $user->can('delete_gallery::album');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_gallery::album');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GalleryAlbum  $galleryAlbum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, GalleryAlbum $galleryAlbum): bool
    {
        return $user->can('force_delete_gallery::album');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_gallery::album');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GalleryAlbum  $galleryAlbum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, GalleryAlbum $galleryAlbum): bool
    {
        return $user->can('restore_gallery::album');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_gallery::album');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GalleryAlbum  $galleryAlbum
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, GalleryAlbum $galleryAlbum): bool
    {
        return $user->can('replicate_gallery::album');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_gallery::album');
    }

}
