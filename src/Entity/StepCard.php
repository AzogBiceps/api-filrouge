<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\StepCardRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"stepCard"}})
 * @ORM\Entity(repositoryClass=StepCardRepository::class)
 */
class StepCard
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"stepCard"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $stepSeason;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $labelWin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $messageWin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $pictureWin;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"stepCard"})
     */
    private $moneyWin;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"stepCard"})
     */
    private $opinionWin;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"stepCard"})
     */
    private $searchWin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $labelLoose;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $messageLoose;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"stepCard"})
     */
    private $pictureLoose;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"stepCard"})
     */
    private $moneyLoose;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"stepCard"})
     */
    private $opinionLoose;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"stepCard"})
     */
    private $searchLoose;

    /**
     * @ORM\OneToOne(targetEntity=Game::class, inversedBy="stepCard", cascade={"persist", "remove"})
     * @Groups({"stepCard"})
     */
    private $game;

    /**
     * @ORM\Column(type="text")
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStepSeason(): ?string
    {
        return $this->stepSeason;
    }

    public function setStepSeason(string $stepSeason): self
    {
        $this->stepSeason = $stepSeason;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLabelWin(): ?string
    {
        return $this->labelWin;
    }

    public function setLabelWin(string $labelWin): self
    {
        $this->labelWin = $labelWin;

        return $this;
    }

    public function getMessageWin(): ?string
    {
        return $this->messageWin;
    }

    public function setMessageWin(string $messageWin): self
    {
        $this->messageWin = $messageWin;

        return $this;
    }

    public function getPictureWin(): ?string
    {
        return $this->pictureWin;
    }

    public function setPictureWin(string $pictureWin): self
    {
        $this->pictureWin = $pictureWin;

        return $this;
    }

    public function getMoneyWin(): ?int
    {
        return $this->moneyWin;
    }

    public function setMoneyWin(int $moneyWin): self
    {
        $this->moneyWin = $moneyWin;

        return $this;
    }

    public function getOpinionWin(): ?int
    {
        return $this->opinionWin;
    }

    public function setOpinionWin(int $opinionWin): self
    {
        $this->opinionWin = $opinionWin;

        return $this;
    }

    public function getSearchWin(): ?int
    {
        return $this->searchWin;
    }

    public function setSearchWin(int $searchWin): self
    {
        $this->searchWin = $searchWin;

        return $this;
    }

    public function getLabelLoose(): ?string
    {
        return $this->labelLoose;
    }

    public function setLabelLoose(string $labelLoose): self
    {
        $this->labelLoose = $labelLoose;

        return $this;
    }

    public function getMessageLoose(): ?string
    {
        return $this->messageLoose;
    }

    public function setMessageLoose(string $messageLoose): self
    {
        $this->messageLoose = $messageLoose;

        return $this;
    }

    public function getPictureLoose(): ?string
    {
        return $this->pictureLoose;
    }

    public function setPictureLoose(string $pictureLoose): self
    {
        $this->pictureLoose = $pictureLoose;

        return $this;
    }

    public function getMoneyLoose(): ?int
    {
        return $this->moneyLoose;
    }

    public function setMoneyLoose(int $moneyLoose): self
    {
        $this->moneyLoose = $moneyLoose;

        return $this;
    }

    public function getOpinionLoose(): ?int
    {
        return $this->opinionLoose;
    }

    public function setOpinionLoose(int $opinionLoose): self
    {
        $this->opinionLoose = $opinionLoose;

        return $this;
    }

    public function getSearchLoose(): ?int
    {
        return $this->searchLoose;
    }

    public function setSearchLoose(int $searchLoose): self
    {
        $this->searchLoose = $searchLoose;

        return $this;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function setGame(?Game $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
