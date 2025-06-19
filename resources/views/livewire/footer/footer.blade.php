 <div class="mx-auto w-full mt-30">
     <div class=" p-2 flex justify-between">
        {{-- Brand --}}
         <div>
             <x-brand />
         </div>
          {{-- social media links --}}
        <div>
            <livewire:footer.social-media-links />
        </div>
     </div>
     <div class="p-10 space-y-10 lg:flex justify-between border-y-1 border-slate-100">
         <div class="space-y-5">
             <div>
                 <h3 class="text-md font-bold">Join the Newsletter</h3>
             </div>
             <div>
                 <div class="md:space-y-1 flex space-x-3 shadow-none">
                     <div>
                         <x-input wire:model="name" placeholder="your email address" icon="o-envelope" />
                         <p class="text-sm mt-1">No spam, just occasional updates.</p>
                     </div>
                     <div>
                         <x-button label="Join" class="btn-primary" />
                     </div>
                 </div>
                 <div></div>
             </div>
         </div>
         <div class="grid grid-cols-2 lg:grid-cols-3 gap-5">
            {{-- links section --}}
             <div>
                <span class="text-primary-content">Links</span>
                <div class="mt-3">
                    <livewire:footer.footer-link />
                </div>
             </div>
             {{--Info links section --}}
              <div>
                <span class="text-primary-content">Information</span>
                <div class="mt-3">
                    <livewire:footer.footer-info-link/>
                </div>
             </div>
             {{--Other links section --}}
              <div>
                <span class="text-primary-content">Other</span>
                <div class="mt-3">
                    <livewire:footer.footer-other-link />
                </div>
             </div>
         </div>
     </div>
      {{-- Terms and conditions --}}
     <div class="md:flex justify-between text-sm my-4 space-y-5">
         <div class="flex space-x-5">
             <div>
                <a href="{{ route('privacy') }}" class="hover:underline">Privacy</a>
            </div>
             <div>
                <a href="{{ route('terms') }}" class="hover:underline">Terms</a>
            </div>
         </div>
         <!-- copyright -->
         <div>
             <livewire:footer.copyright />
         </div>
     </div>
 </div>