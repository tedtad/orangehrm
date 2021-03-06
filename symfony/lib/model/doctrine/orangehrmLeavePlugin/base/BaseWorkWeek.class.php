<?php

/**
 * BaseWorkWeek
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                 $id                                            Type: integer(4), primary key
 * @property int                 $operational_country_id                        Type: integer(4)
 * @property int                 $mon                                           Type: integer(4)
 * @property int                 $tue                                           Type: integer(4)
 * @property int                 $wed                                           Type: integer(4)
 * @property int                 $thu                                           Type: integer(4)
 * @property int                 $fri                                           Type: integer(4)
 * @property int                 $sat                                           Type: integer(4)
 * @property int                 $sun                                           Type: integer(4)
 * @property OperationalCountry  $OperationalCountry                            
 *  
 * @method int                   getId()                                        Type: integer(4), primary key
 * @method int                   getOperationalCountryId()                      Type: integer(4)
 * @method int                   getMon()                                       Type: integer(4)
 * @method int                   getTue()                                       Type: integer(4)
 * @method int                   getWed()                                       Type: integer(4)
 * @method int                   getThu()                                       Type: integer(4)
 * @method int                   getFri()                                       Type: integer(4)
 * @method int                   getSat()                                       Type: integer(4)
 * @method int                   getSun()                                       Type: integer(4)
 * @method OperationalCountry    getOperationalCountry()                        
 *  
 * @method WorkWeek              setId(int $val)                                Type: integer(4), primary key
 * @method WorkWeek              setOperationalCountryId(int $val)              Type: integer(4)
 * @method WorkWeek              setMon(int $val)                               Type: integer(4)
 * @method WorkWeek              setTue(int $val)                               Type: integer(4)
 * @method WorkWeek              setWed(int $val)                               Type: integer(4)
 * @method WorkWeek              setThu(int $val)                               Type: integer(4)
 * @method WorkWeek              setFri(int $val)                               Type: integer(4)
 * @method WorkWeek              setSat(int $val)                               Type: integer(4)
 * @method WorkWeek              setSun(int $val)                               Type: integer(4)
 * @method WorkWeek              setOperationalCountry(OperationalCountry $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWorkWeek extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_work_week');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('operational_country_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('mon', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('tue', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('wed', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('thu', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('fri', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('sat', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('sun', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OperationalCountry', array(
             'local' => 'operational_country_id',
             'foreign' => 'id'));
    }
}