<?php

namespace LaravelViewComponents\Contracts;

interface UserHasAvatarContract
{
    /**
     * Get the Avatar image URL.
     *
     * @param  bool  $relative
     * @return string
     */
    public function getAvatarImageUrl($relative = false);
    /**
     * Get the color of the avatar status badge.
     *
     * @return string
     */
    public function getStatusColor();
}
