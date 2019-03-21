<?php
									if(isset($_SESSION['email']))
										{
									
										if (check_if_added_to_cart(1))
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
										
											else
											{
												?>
												<p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
												<?php
											}
										}
										else{
											?><p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
											} 
										
									?>