<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @author     John Etherton <john@ethertontech.com>
 * @package    Enhanced Map, Ushahidi Plugin - https://github.com/jetherton/enhancedmap
 * @license	   GNU Lesser GPL (LGPL) Rights pursuant to Version 3, June 2007
 * @copyright  2012 Etherton Technologies Ltd. <http://ethertontech.com>
 * @Date	   2012-06-08
 * Purpose:	   View for the layers filter
 *             This file is adapted from the file Ushahidi_Web/themes/default/views/main.php
 *             Originally written by the Ushahidi Team
 * Inputs:     $layer_id - HTML element id of this whole view. Great for a $("#<?php echo $layer_id?>") type function
 *             $layers - An array of the available layers
 *             $show_on_load - If this is true then the layers widget will be shown, otherwise it'll be minimized
 * Outputs:    HTML
 *
 * The Enhanced Map, Ushahidi Plugin is free software: you can redistribute
 * it and/or modify it under the terms of the GNU Lesser General Public License
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * The Enhanced Map, Ushahidi Plugin is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with the Enhanced Map, Ushahidi Plugin.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 * Changelog:
 * 2012-06-08:  Etherton - Initial release
 *
 * Developed by Etherton Technologies Ltd.
 */
?>



<?php
if ($layers)
{
	?>
				<!-- Layers (KML/KMZ) -->

<div id="<?php echo $layer_id;?>" class="layer-filters ">
					

						<div id="kml_switch" class="category-filters layer-filters">
							<table><tr>
							<?php
							foreach ($layers as $layer => $layer_info)
							{
								$layer_name = $layer_info[0];
								$layer_color = $layer_info[1];
								$layer_url = $layer_info[2];
								$layer_file = $layer_info[3];
								$layer_link = (!$layer_url) ?
									url::base().Kohana::config('upload.relative_directory').'/'.$layer_file :
									$layer_url;
								echo '<td><a href="#" id="layer_'. $layer .'"
								onclick="switchLayer(\''.$layer.'\',\''.$layer_link.'\',\''.$layer_color.'\'); return false;"><div class="swatch" style="background-color:#'.$layer_color.'">
								<td>'.$layer_name.'<td>&nbsp;</div></a>';
							}
							?>
						</tr>
						<br/><br/>
					</table>
					</div>
				</div>
				<!-- /Layers -->
				<?php
			}
			?>
			
			
			