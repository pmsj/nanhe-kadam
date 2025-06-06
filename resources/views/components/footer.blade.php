 <div class="mx-auto max-w-7xl">
     <div class=" p-2 flex justify-between">
         <div>
             <h2 class="text-xl font-bold">Nanhe Kadam</h2>
         </div>
         <div class="space-x-2">
             <x-icon name="s-academic-cap" class="w-6 h-6" />
             <x-icon name="s-academic-cap" class="w-6 h-6" />
             <x-icon name="s-academic-cap" class="w-6 h-6" />
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
         <div class="space-x-20 flex">
             <div>Learn</div>
             <div>Get help</div>
             <div>Join</div>
         </div>
     </div>
     <!-- Terms and conditions -->
     <div class="md:flex justify-between text-sm my-4 space-y-5">
         <div class="flex space-x-5">
             <div>Privacy</div>
             <div>Terms</div>
             <div>Status</div>
             <div>Uses</div>
         </div>
         <div>
             <p>&copy; Nanhe Kadam {{date("Y")}}. All Rights Reserved. Made in the India.</p>
         </div>
     </div>
 </div>