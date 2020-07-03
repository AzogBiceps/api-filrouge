<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"card"}})
 * @ORM\Entity(repositoryClass=CardRepository::class)
 */
class Card
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Category Catégorie de la carte
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="cards")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"card"})
     */
    private $category;

    /**
     * @var string Intitulé de la carte
     * @ORM\Column(type="text")
     * @Groups({"card"})
     */
    private $context;

    /**
     * @var Choice Les différentes réponses disponibles
     * @ORM\OneToMany(targetEntity=Choice::class, mappedBy="card", orphanRemoval=true)
     * @Groups({"card"})
     */
    private $choices;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }

    /**
     * @return Collection|Choice[]
     */
    public function getChoices(): Collection
    {
        return $this->choices;
    }

    public function addChoice(Choice $choice): self
    {
        if (!$this->choices->contains($choice)) {
            $this->choices[] = $choice;
            $choice->setCard($this);
        }

        return $this;
    }

    public function removeChoice(Choice $choice): self
    {
        if ($this->choices->contains($choice)) {
            $this->choices->removeElement($choice);
            // set the owning side to null (unless already changed)
            if ($choice->getCard() === $this) {
                $choice->setCard(null);
            }
        }

        return $this;
    }
}
