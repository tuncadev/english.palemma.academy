@props(['msg_header', 'msg_text'])
<div class="flex items-center">
    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <h3 class="text-lg font-medium">{{ $msg_header ?? "This is a info alert" }}</h3>
  </div>
  <div class="mt-2 mb-4 text-sm">
    {{ $msg_text ?? "More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content." }}
  </div>
</div>
