<div>
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> Pristatymo informacija</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Miestas</h5>
                                            <input type="text" wire:model="city" class="with-border" value="">
                                        </div>
									</div>

									<div class="col-xl-6">
										<div class="submit-field">
                                            <div class="submit-field">
                                                <h5>Gatvė ir namo numeris</h5>
                                                <input type="text" wire:model="adress" class="with-border" value="{{ isset($userInfo) ? $userInfo->avatar : '' }}">
                                            </div>
										</div>
									</div>

									<div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Pašto kodas</h5>
                                            <input type="text" wire:model="post" class="with-border" value="{{ isset($userInfo) ? $userInfo->account : '' }}">
                                        </div>
									</div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Tel. nr.</h5>
                                            <input type="text" wire:model="phone" class="with-border" value="">
                                        </div>
									</div>
								</div>
							</li>							
						</ul>
						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Sąskaitos pridėjimas</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Sąskaitos numeris</h5>
										<input type="text" class="with-border">
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Bankas</h5>
										<select name="city_id" class="selectpicker with-border" title="Select Job Type" data-live-search="true">
												<option value="Swedbank">Swedbank</option>
												<option value="SEB">SEB</option>
												<option value="Šiaulių bankas">Šiaulių bankas</option>
												<option value="4">Australia</option>
												<option value="5">Austria</option>								
										</select>
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Pristatymo trukmė</h5>
										<input type="text" class="with-border">
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Prekės lokacija</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Job Type" data-live-search="true">
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>									
											</select>
									</div>
								</div>

								<div class="col-xl-12">
									<div class="checkbox">
										<input type="checkbox" id="two-step" checked>
										<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <!-- Button -->
				<div class="col-xl-12">
					<button wire:click="save" class="button ripple-effect big margin-top-30">Išsaugoti</button>
				</div>
</div>
