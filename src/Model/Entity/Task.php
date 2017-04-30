<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property string $description
 * @property int $priority
 * @property int $status
 * @property \Cake\I18n\Time $created
 */
class Task extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Retorna a descrição do status da tarefa.
     *
     * @return String
     */
    public function getStatus()
    {
        if ($this->status === 0)
            return "Pendente";
        else if ($this->status === 1)
            return "Em andamento";

        return "Concluída";
    }
}
