<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
					['label' => 'Inicio', 'options' => ['class' => 'header']],
				    [
                                'label' => 'Instituciones',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    [
                                        'label' => 'Académico',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Institución educativa',
											'icon' => 'circle-o',
											'url' => '#',
											'items' => [
												['label' => 'Paralelos','icon' => 'circle-o','url' => '#',],
												['label' => 'Estudiantes(matrícula)','icon' => 'circle-o','url' => '#',],
												['label' => 'Docentes','icon' => 'circle-o','url' => '#',],
												['label' => 'Pruebas saber','icon' => 'circle-o','url' => '#',],
												['label' => 'Investigación','icon' => 'circle-o','url' => '#',],
												['label' => 'Tipos calificación','icon' => 'circle-o','url' => '#',],
												['label' => 'Ponderación resultados','icon' => 'circle-o','url' => '#',],
												['label' => 'Estadisticas','icon' => 'circle-o','url' => '#',],
												['label' => 'Reportes','icon' => 'circle-o','url' => '#',],
											],						
											
											
											], // 
                                        ],//
                                    ],
									 [
                                        'label' => 'Servicios',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Transporte', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Alimentación', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Soporte y apoyo académco', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
									[
                                        'label' => 'Administrativo',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                         'items' => [
                                            ['label' => 'Institución educativa',
											'icon' => 'circle-o',
											'url' => '#',
											'items' => [
												['label' => 'Sedes','icon' => 'circle-o','url' => '#',],
												['label' => 'Aulas','icon' => 'circle-o','url' => '#',],
												['label' => 'Jornadas','icon' => 'circle-o','url' => '#',],
												['label' => 'Grados','icon' => 'circle-o','url' => '#',],
												['label' => 'Periodos','icon' => 'circle-o','url' => '#',],
												['label' => 'Asignaturas','icon' => 'circle-o','url' => '#',],
												['label' => 'Áreas enseñanza','icon' => 'circle-o','url' => '#',],
												['label' => 'Niveles','icon' => 'circle-o','url' => '#',],
												['label' => 'Bloques por sede','icon' => 'circle-o','url' => '#',],
												['label' => 'Paralelos por nivel','icon' => 'circle-o','url' => '#',],
												['label' => 'Distribución académica general','icon' => 'circle-o','url' => '#',],
											],						
											
											
											], // 
                                        ],//
                                    ],
									[
                                        'label' => 'Participación en proyectos',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Por institución', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Por maestro o directivo', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Proyectos jornada compleentaria', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
									
									
									
									
									
									
                                ],
                            ],
							
					
					
                    ['label' => 'Personas', 'options' => ['class' => 'header']],
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
