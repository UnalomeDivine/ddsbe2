<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tbluser';
        // column sa table
        protected $fillable = ['username', 'password','gender', 'jobid'];
        public $timestamps = false;
        protected $primaryKey = 'id';

        protected $hidden = [
            'password',
        ];
 }