 <div class="mx-auto w-full mt-20">
     <div class=" p-2 flex justify-between">
         <div>
             <h2 class="text-xl font-bold">Nanhe Kadam</h2>
         </div>
         <div class="space-x-2">
            <a href="">
                <x-icon 
                    name="fab.youtube" 
                    class="w-8 h-8 text-error transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" 
            />
            </a> <a href="">
                <x-icon 
                    name="fab.facebook" 
                    class="w-6 h-6 text-blue-500 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" 
                />
            </a> <a href="">
                <x-icon 
                    name="fab.instagram" 
                    class="w-6 h-6 text-pink-600 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110" 
                />
            </a>
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