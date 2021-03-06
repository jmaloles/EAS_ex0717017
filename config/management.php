<?php

use App\Models\Management\Costing\Project\Project;
use App\Models\Management\Costing\Item\Item;
use App\Models\Management\MaterialRequisition\Request\Request\Request;

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


      'costing'  => [
         'user_table' => 'user',

         'project'  => Project::class,
         'projects_table' => 'projects',

         /*
         * Item's Table
         *
         * Used by Project's Table for setting up database relationship
         */
         'item' => Item::class,
         'items_table' => 'items',
      ],

      'material_requisition' => [
         'user_table' => 'user_table',

         'request' => Request::class,
         'requests_table' => 'requests',

         'projects_table' => 'projects'
      ]

   ],
];
