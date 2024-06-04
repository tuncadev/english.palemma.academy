<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="bg-black/75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
              <h3 class="text-xl font-semibold text-gray-900 ">
                  @lang('auth.signin')
              </h3>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5">
              <form class="space-y-4" action="{{ route('login') }}" method="POST">
                  @csrf
                  
                  <!-- Display Errors -->
                  @if ($errors->any())
                      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">@lang('auth.error')</strong>
                          <span class="block sm:inline">{{ $errors->first() }}</span>
                      </div>
                  @endif

                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">
                        @lang('auth.email')
                      </label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required />
                  </div>
                  <div>
                    <label for="password">
                      @lang('auth.password')
                    </label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                  </div>
                  <div class="flex justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                              <input id="remember" name="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" />
                          </div>
                          <label for="remember" class="ms-2 text-sm font-medium text-gray-900 ">
                            @lang('auth.remember')
                          </label>
                      </div>
                      <a href="{{ route('password.request') }}" class="text-sm text-blue-700 hover:underline ">
                        @lang('auth.lost')
                      </a>
                  </div>
                  <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    @lang('auth.login')
                  </button>
              </form>
          </div>
      </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      if (@json($errors->any())) {
        var modal = document.getElementById('authentication-modal');
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('role', 'dialog');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }
  
      document.querySelectorAll('[data-modal-hide="authentication-modal"]').forEach((el) => {
          el.addEventListener('click', () => {
              document.getElementById('authentication-modal').classList.add('hidden');
          });
      });
  });
  </script>
  