<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name'        => 'Navegar usuarios',
        	'slug'        => 'users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name'        => 'Ver datalles de usuarios',
        	'slug'        => 'users.show',
        	'description' => 'Ver en detalle todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name'        => 'Edicion de usuarios',
        	'slug'        => 'users.edit',
        	'description' => 'Editar todos los datos del sistema',
        ]);

        Permission::create([
        	'name'        => 'Eliminar usuarios',
        	'slug'        => 'users.destroy',
        	'description' => 'Eliminar cualquier usuario del sistema',
        ]);


    	//Roles
        Permission::create([
        	'name'        => 'Navegar roles',
        	'slug'        => 'roles.index',
        	'description' => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name'        => 'Ver datalles de roles',
        	'slug'        => 'roles.show',
        	'description' => 'Ver en detalle todos los roles del sistema',
        ]);

        Permission::create([
        	'name'        => 'Creacion de roles',
        	'slug'        => 'roles.create',
        	'description' => 'Crear roles en el sistema',
        ]);        

        Permission::create([
        	'name'        => 'Edicion de roles',
        	'slug'        => 'roles.edit',
        	'description' => 'Editar todos los roles del sistema',
        ]);

        Permission::create([
        	'name'        => 'Eliminar roles',
        	'slug'        => 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema',
        ]);	


        //Formato de salud
        Permission::create([
            'name'        => 'Navegar formato de salud',
            'slug'        => 'formatos.index',
            'description' => 'Lista y navega todos los formato de salud del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver datalles de formato de salud',
            'slug'        => 'formatos.show',
            'description' => 'Ver en detalle todos los formato de salud del sistema',
        ]);

        Permission::create([
            'name'        => 'Creacion de formato de salud',
            'slug'        => 'formatos.create',
            'description' => 'Crear formato de salud en el sistema',
        ]);        

        Permission::create([
            'name'        => 'Edicion de formato de salud',
            'slug'        => 'formatos.edit',
            'description' => 'Editar todos los formato de salud del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar formato de salud',
            'slug'        => 'formatos.destroy',
            'description' => 'Eliminar cualquier formato de salud del sistema',
        ]);

        //Nutricion
        Permission::create([
            'name'        => 'Navegar nutricion',
            'slug'        => 'nutricions.index',
            'description' => 'Lista y navega todos los formato de nutricion del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver datalles de nutricion',
            'slug'        => 'nutricions.show',
            'description' => 'Ver en detalle todos los formato de nutricion del sistema',
        ]);

        Permission::create([
            'name'        => 'Creacion de nutricion',
            'slug'        => 'nutricions.create',
            'description' => 'Crear formato de nutricion en el sistema',
        ]);        

        Permission::create([
            'name'        => 'Edicion de nutricion',
            'slug'        => 'nutricions.edit',
            'description' => 'Editar todos los formato de nutricion del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar nutricion',
            'slug'        => 'nutricions.destroy',
            'description' => 'Eliminar cualquier formato de nutricion del sistema',
        ]);

        //Analisis
        Permission::create([
            'name'        => 'Navegar analisis',
            'slug'        => 'analisis.index',
            'description' => 'Lista y navega todos los analisis del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver datalles de analisis',
            'slug'        => 'analisis.show',
            'description' => 'Ver en detalle todos los analisis del sistema',
        ]);

        Permission::create([
            'name'        => 'Creacion de analisis',
            'slug'        => 'analisis.create',
            'description' => 'Crear analisis en el sistema',
        ]);        

        Permission::create([
            'name'        => 'Edicion de analisis',
            'slug'        => 'analisis.edit',
            'description' => 'Editar todos los analisis del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar analisis',
            'slug'        => 'analisis.destroy',
            'description' => 'Eliminar cualquier analisis del sistema',
        ]); 

        //Tabulacion
        Permission::create([
            'name'        => 'Navegar tabulacion',
            'slug'        => 'tabulacions.index',
            'description' => 'Lista y navega todos las tabulaciones del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver datalles de tabulacion',
            'slug'        => 'tabulacions.show',
            'description' => 'Ver en dallate todos las tabulaciones del sistema',
        ]);

        Permission::create([
            'name'        => 'Creacion de tabulacion',
            'slug'        => 'tabulacions.create',
            'description' => 'Crear las tabulaciones en el sistema',
        ]);        

        Permission::create([
            'name'        => 'Edicion de tabulacion',
            'slug'        => 'tabulacions.edit',
            'description' => 'Editar todos las tabulaciones del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar tabulacion',
            'slug'        => 'tabulacions.destroy',
            'description' => 'Eliminar cualquier tabulacion del sistema',
        ]);

        //Evaluacion funcional
        Permission::create([
            'name'        => 'Navegar evaluacion funcional',
            'slug'        => 'evaluacions.index',
            'description' => 'Lista y navega todos las evaluaciones funcionales del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver datalles de evaluacion funcional',
            'slug'        => 'evaluacions.show',
            'description' => 'Ver en datalle todos las evaluaciones funcionales del sistema',
        ]);

        Permission::create([
            'name'        => 'Creacion de evaluacion funcional',
            'slug'        => 'evaluacions.create',
            'description' => 'Crear las evaluaciones funcionales en el sistema',
        ]);        

        Permission::create([
            'name'        => 'Edicion de evaluacion funcional',
            'slug'        => 'evaluacions.edit',
            'description' => 'Editar todos las evaluaciones funcionales del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar evaluacion funcional',
            'slug'        => 'evaluacions.destroy',
            'description' => 'Eliminar cualquier evalacion funcional del sistema',
        ]); 

         //Problematica
        Permission::create([
            'name'        => 'Navegar problematicas',
            'slug'        => 'problematicas.index',
            'description' => 'Lista y navega todos las problematicas del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver datalles de problematicas',
            'slug'        => 'problematicas.show',
            'description' => 'Ver en datalle todos las problematicas del sistema',
        ]);

        Permission::create([
            'name'        => 'Creacion de problematicas',
            'slug'        => 'problematicas.create',
            'description' => 'Crear las problematicas en el sistema',
        ]);        

        Permission::create([
            'name'        => 'Edicion de problematicas',
            'slug'        => 'problematicas.edit',
            'description' => 'Editar todos las problematicas del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar problematicas',
            'slug'        => 'problematicas.destroy',
            'description' => 'Eliminar cualquier problematicas del sistema',
        ]);

        //Recomendacion
        Permission::create([
            'name'        => 'Navegar recomendacion',
            'slug'        => 'recomendacions.index',
            'description' => 'Lista y navega todas las recomendaciones del sistema',
        ]);

        Permission::create([
            'name'        => 'Ver datalles de recomendacion',
            'slug'        => 'recomendacions.show',
            'description' => 'Ver en detalle todas las recomendaciones del sistema',
        ]);

        Permission::create([
            'name'        => 'Creacion de recomendacion',
            'slug'        => 'recomendacions.create',
            'description' => 'Crear recomendaciones en el sistema',
        ]);        

        Permission::create([
            'name'        => 'Edicion de recomendacion',
            'slug'        => 'recomendacions.edit',
            'description' => 'Editar todas las recomendaciones del sistema',
        ]);

        Permission::create([
            'name'        => 'Eliminar recomendacion',
            'slug'        => 'recomendacions.destroy',
            'description' => 'Eliminar cualquier recomendacion del sistema',
        ]);
    }
}
