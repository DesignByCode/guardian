<?php


namespace DesignByCode\Guardian\Http\Traits;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\InteractsWithMedia;

trait Avatar
{
    use InteractsWithMedia;

    /**
     * @param int $size
     * @return string
     * @description return gravatar url
     */
    public function gravatar($size = 100) : String
    {
        return "https://secure.gravatar.com/avatar/"
            . md5(strtolower(trim($this->email)))
            . "?s=" . $size
            . "&" . http_build_query(config('guardian.avatar.gravatar.query-string'));
    }

    /**
     * @return String
     */
    public function getGravatarAttribute() : String
    {
        return $this->gravatar(config('guardian.avatar.size'));
    }

    public function uiAvatar($size = 100): string
    {
        return "https://ui-avatars.com/api/?name="
            . preg_replace('/\s+/', '+', $this->name)
            . "&size=" . $size
            . "&" . http_build_query(config('guardian.avatar.ui-avatar.query-string'));
    }

    /**
     * @return string
     */
    public function getUiAvatarAttribute(): string
    {
        return $this->uiAvatar(config('guardian.avatar.size'));
    }

    /**
     * @return string
     */
    public function avatar(): string
    {
        $lookup = [
            'ui-avatar' => $this->getFirstMediaUrl('avatar', 'small') ?: $this->uiAvatar(config('guardian.avatar.size')),
            'gravatar' => $this->gravatar(config('guardian.avatar.size')),
        ];

        return $lookup[config('guardian.avatar.type')];
    }

    /**
     * @return string
     */
    public function getAvatarAttribute(): string
    {
        return $this->avatar();
    }

    /**
     * @return bool
     */
    public function haveAvatar(): bool
    {
        return $this->getFirstMediaUrl('avatar') ? true : false;
    }

    public function registerAllMediaConversions(): void
    {
        foreach (config('guardian.avatar-media') as $key => $value) {
            $this->addMediaConversion($key)
                ->crop(Manipulations::CROP_CENTER, $value['width'], $value['height'])
                ->optimize()
                ->width($value['width'])
                ->height($value['height']);
        }
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->singleFile();
    }
}
