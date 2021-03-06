<?php

namespace AsyncAws\S3\Result;

class Owner
{
    /**
     * Container for the display name of the owner.
     */
    private $DisplayName;

    /**
     * Container for the ID of the owner.
     */
    private $ID;

    /**
     * @param array{
     *   DisplayName: ?string,
     *   ID: ?string,
     * } $input
     */
    public function __construct(array $input)
    {
        $this->DisplayName = $input['DisplayName'];
        $this->ID = $input['ID'];
    }

    public static function create($input): self
    {
        return $input instanceof self ? $input : new self($input);
    }

    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }

    public function getID(): ?string
    {
        return $this->ID;
    }
}
