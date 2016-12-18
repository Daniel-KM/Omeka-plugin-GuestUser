<?php

class GuestUserToken extends Omeka_Record_AbstractRecord
{
    public $id;
    public $token;
    public $user_id;
    public $email;
    public $created;
    public $confirmed;

    /**
     * Executes before the record is saved.
     */
    protected function beforeSave($args)
    {
        $this->created = Zend_Date::now()->toString('yyyy-MM-dd HH:mm:ss');

    }
}


