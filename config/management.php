<?php

use App\Models\Management\Costing\Project\Project;
use App\Models\Management\Costing\Item\Item;

return [
   /*
   * Process Management
   */
   'management' => [

      /*
      * Users's Table
      *
      * Used by Project's Table for setting up database relationship
      */
      'users_table' => 'users',

      'costing'  => [
         'project'  => Project::class,
         'projects_table' => 'project',

         /*
         * Item's Table
         *
         * Used by Project's Table for setting up database relationship
         */
         'item' => Item::class,
         'items_table' => 'item',
      ],


   ],
];