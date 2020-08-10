<b-modal ref="logout-modal"
         class="modal"
         hide-footer
         title="{{ __('Ready to quit?') }}">
    <form class="modal-content" method="post"
          action="{{route('logout')}}">
        @csrf
        <div class="d-block text-center">
            <h3>{{ __('Are you sure to quit?') }}</h3>
        </div>
        <b-button class="mt-3"
                  variant="primary"
                  @click="hideLogoutModal">
            {{ __('Cancel') }}
        </b-button>
        <b-button class=""
                  variant="warning"
                  type="submit">
            {{ __('Quit') }}
        </b-button>
    </form>
</b-modal>