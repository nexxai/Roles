@extends('laralum::layouts.master')
@section('icon', 'ion-plus-round')
@section('title', __('laralum_roles::general.create_role'))
@section('subtitle', __('laralum_roles::general.create_role_desc'))
@section('breadcrumb')
	<ul class="uk-breadcrumb">
		<li><a href="{{ route('laralum::index') }}">@lang('laralum_roles::general.home')</a></li>
		<li><a href="{{ route('laralum::roles.index') }}">@lang('laralum_roles::general.role_list')</a></li>
		<li><span>@lang('laralum_roles::general.create_role')</span></li>
	</ul>
@endsection
@section('content')
	<div class="uk-container uk-container-large">
		<div uk-grid>
			<div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
			<div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
				<div class="uk-card uk-card-default">
					<div class="uk-card-header">
						@lang('laralum_roles::general.create_role')
					</div>
					<div class="uk-card-body">
						<form method="POST" action="{{ route('laralum::roles.store') }}" class="uk-form-stacked">
							{{ csrf_field() }}
							<fieldset class="uk-fieldset">
								<div class="uk-margin">
									<label class="uk-form-label">
										@lang('laralum_roles::general.name') <span class="uk-text-danger">*</span>
									</label>
									<input value="{{ old('name') }}" name="name" class="uk-input" type="text" placeholder="@lang('laralum_roles::general.name')">
								</div>
								<div class="uk-margin">
									<label class="uk-form-label">
										@lang('laralum_roles::general.color') <span class="uk-text-danger">*</span>
									</label>
									<input value="{{ old('color') }}" name="color" class="uk-input" type="color" placeholder="@lang('laralum_roles::general.color')">
								</div>
								<div class="uk-margin">
									<label class="uk-form-label">
										@lang('laralum_roles::general.description') <span class="uk-text-danger">*</span>
									</label>
									<div class="uk-form-controls">
										<textarea name="description" class="uk-textarea" rows="5" placeholder="{{ __('laralum_roles::general.description') }}">{{ old('description', isset($role) ? $role->description : '') }}</textarea>
									</div>
								</div>
								<div class="uk-margin">
									<a href="{{ route('laralum::roles.index') }}" class="uk-align-left uk-button uk-button-default">@lang('laralum_roles::general.cancel')</a>
									<button type="submit" class="uk-button uk-button-primary uk-align-right">
										<span class="ion-forward"></span>&nbsp; @lang('laralum_roles::general.create')
									</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
		</div>
	</div>
@endsection
