<?php
namespace App\Model\Table;

use App\Model\Entity\League;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Leagues Model
 */
class LeaguesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('leagues');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Events', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Teams', [
            'foreignKey' => 'league_id'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'league_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'leagues_tags'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('name')
            ->allowEmpty('logo')
            ->allowEmpty('motto')
            ->add('started', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('started')
            ->add('public', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('public');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['event_id'], 'Events'));
        return $rules;
    }
}
