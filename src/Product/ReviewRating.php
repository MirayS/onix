<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class ReviewRating
{
    private ?string $Rating = null;

    private ?int $RatingLimit = null;

    private array $RatingUnits = [];

    public function setRating(string $rating): static
    {
        $this->Rating = $rating;

        return $this;
    }

    public function getRating(): ?string
    {
        return $this->Rating;
    }

    public function setRatingLimit(int $ratingLimit): static
    {
        $this->RatingLimit = $ratingLimit;

        return $this;
    }

    public function getRatingLimit(): ?int
    {
        return $this->RatingLimit;
    }

    public function addRatingUnits(string $ratingUnits): static
    {
        $this->RatingUnits[] = $ratingUnits;

        return $this;
    }

    public function getRatingUnits(): array
    {
        return $this->RatingUnits;
    }

    public function removeRatingUnits(string $ratingUnits): static
    {
        $this->RatingUnits = array_values(array_filter(
            $this->RatingUnits,
            static fn ($item): bool => $item !== $ratingUnits,
        ));

        return $this;
    }
}
