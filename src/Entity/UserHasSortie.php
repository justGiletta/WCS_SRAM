<?php

namespace App\Entity;

use App\Repository\UserHasSortieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserHasSortieRepository::class)
 */
class UserHasSortie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=user::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity=sortie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $sortie_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?user
    {
        return $this->user_id;
    }

    public function setUserId(?user $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getSortieId(): ?sortie
    {
        return $this->sortie_id;
    }

    public function setSortieId(?sortie $sortie_id): self
    {
        $this->sortie_id = $sortie_id;

        return $this;
    }
}
