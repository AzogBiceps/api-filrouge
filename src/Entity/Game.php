<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("stepCard")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Groups("stepCard")
     */
    private $information;

    /**
     * @ORM\Column(type="text")
     * @Groups("stepCard")
     */
    private $rules;

    /**
     * @ORM\OneToOne(targetEntity=StepCard::class, mappedBy="game", cascade={"persist", "remove"})
     */
    private $stepCard;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getInformation(): ?string
    {
        return $this->information;
    }

    public function setInformation(string $information): self
    {
        $this->information = $information;

        return $this;
    }

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function setRules(string $rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    public function getStepCard(): ?StepCard
    {
        return $this->stepCard;
    }

    public function setStepCard(?StepCard $stepCard): self
    {
        $this->stepCard = $stepCard;

        // set (or unset) the owning side of the relation if necessary
        $newGame = null === $stepCard ? null : $this;
        if ($stepCard->getGame() !== $newGame) {
            $stepCard->setGame($newGame);
        }

        return $this;
    }
}
