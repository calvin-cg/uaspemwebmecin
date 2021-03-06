<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5 col-12 col-md-6 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col">
					<div class="py-5 px-4">

						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Complete your profile!</h1>
						</div>

						<form class="user" method="post" action="<?= base_url('auth/form_completion_action'); ?>">
							<div class="form-group">
							<input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Phone Number" value="<?= set_value('phone'); ?>">
								<?php //Shows error message if any ?>
								<?= form_error('phone', '<small class="text-danger pl-3">* ', '</small>'); ?>
							</div>

							<div class="form-group">
							<input type="text" class="form-control form-control-user" id="line" name="line" placeholder="Line ID" value="<?= set_value('line'); ?>">
								<?php //Shows error message if any ?>
								<?= form_error('line', '<small class="text-danger pl-3">* ', '</small>'); ?>
							</div>

							<div class="form-group">
							<input type="text" class="form-control form-control-user" id="instagram" name="instagram" placeholder="Instagram Username" value="<?= set_value('instagram'); ?>">
								<?php //Shows error message if any ?>
								<?= form_error('instagram', '<small class="text-danger pl-3">* ', '</small>'); ?>
							</div>

							<div class="form-group">
								<label for="bank">Bank Account</label><br>
								<select id="bank_id" class="form-control" name="bank_id">
									<option value="" hidden>Choose Bank</option>
									<?php echo $view_bank; ?>
								</select>
								<?= form_error('bank_id', '<small class="text-danger pl-3">* ', '</small>'); ?>
							</div>

							<div class="form-group">
							<input type="text" class="form-control form-control-user" id="bank_account" name="bank_account" placeholder="Bank Account Number" value="<?= set_value('bank_account'); ?>">
								<?php //Shows error message if any ?>
								<?= form_error('bank_account', '<small class="text-danger pl-3">* ', '</small>'); ?>
							</div>
							


							<button type="submit" class="btn btn-primary btn-user btn-block">
								Done
							</button>
						</form>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>