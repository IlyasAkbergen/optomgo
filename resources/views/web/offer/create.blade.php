@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="contact-wrap">
            <h3>{{ __('New Offer') }}</h3>
            <form method="POST" action="{{ url('/offers') }}">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="title">{{ __('Title') }}</label>
                        <input type="text"
                               id="title"
                               name="title"
                               class="form-control"
                               required
                               placeholder="{{ __('Title of Your Offer') }}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6 padding-bottom">
                        <label for="price">{{ __('Price') }}</label>
                        <input type="number"
                               id="price"
                               name="price"
                               class="form-control"
                               required
                               placeholder="{{ __('Actual Price') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="retailPrice">{{ __('Retail Price') }}</label>
                        <input type="text"
                               id="retailPrice"
                               name="retail_price"
                               class="form-control"
                               required
                               placeholder="{{ __('Retail Price') }}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea name="description"
                                  id="description"
                                  cols="30"
                                  rows="20"
                                  class="form-control"
                                  required
                                  placeholder="{{ __('Description of the Offer') }}">
                        </textarea>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit"
                           value="{{ __('Submit') }}"
                           class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection