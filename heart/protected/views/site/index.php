<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $box = $this->beginWidget(
    'bootstrap.widgets.TbBox',
    array(
        'title' => 'Home',
        'headerIcon' => 'icon- fa fa-home'
    )
);?>
	
	<div class="row-fluid">
		<div class="span6">
			
			<div style="text-align:center;">
			<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/yiiheart.png" width="200">
			</div>
			<p style="padding:10px;">
				Last login
			</p>
			<table class="table">
	        <thead>
	        <tr>
	            <th>#</th>
	            <th>First name</th>
	            <th>Last name</th>
	            <th>Language</th>
	            <th>Hours worked</th>
	        </tr>
	        </thead>
	        <tbody>
	        <tr class="odd">
	            <td style="width: 60px">1</td>
	            <td>Mark</td>
	            <td>Otto</td>
	            <td>CSS</td>
	            <td>10</td>
	        </tr>
	        <tr class="even">
	            <td style="width: 60px">2</td>
	            <td>Jacob</td>
	            <td>Thornton</td>
	            <td>JavaScript</td>
	            <td>20</td>
	        </tr>
	        <tr class="odd">
	            <td style="width: 60px">3</td>
	            <td>Stu</td>
	            <td>Dent</td>
	            <td>HTML</td>
	            <td>15</td>
	        </tr>
	        </tbody>
	    </table>
		</div>
		<div class="span6">
			<?php
			$this->widget(
			    'bootstrap.widgets.TbHighCharts',
			    array(
			        'options' => array(
			        	'chart' => array(
			                'type' => 'column', // area, column, bar, pie, scatter
			            ),
			            'title' => array(
			                'text' => 'Monthly Average Temperature',
			                'x' => -20 //center
			            ),
			            'subtitle' => array(
			                'text' => 'Source: WorldClimate.com',
			                'x' -20
			            ),
			            'xAxis' => array(
			                'categories' => array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
			            ),
			            'yAxis' => array(
			                'title' => array(
			                    'text' =>  'Temperature (°C)',
			                ),
			                'plotLines' => array(
			                    array(
			                        'value' => 0,
			                        'width' => 1,
			                        'color' => '#808080'
			                    )
			                ),
			            ),
			            'tooltip' => array(
			                'valueSuffix' => '°C'
			            ),
			            'legend' => array(
			                'layout' => 'vertical',
			                'align' => 'right',
			                'verticalAlign' => 'middle',
			                'borderWidth' => 0
			            ),
			            'series' => array(
			                array(
			                    'name' => 'Tokyo',
			                    'data' => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6)
			                ),
			                array(
			                    'name' => 'New York',
			                    'data' => array(-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5)
			                ),
			                array(
			                    'name' => 'Berlin',
			                    'data' => array(-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0)
			                ),
			                array(
			                    'name' => 'London',
			                    'data' => array(3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8)
			                )
			            )
			        ),
			        'htmlOptions' => array(
			            'style' => 'min-width: 310px; height: 400px; margin: 0 auto'
			        )
			    )
			);
			?>
		</div>
	</div>
	
<?php $this->endWidget(); ?>
<div class="clearfix"><hr></div>
