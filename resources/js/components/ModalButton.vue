<template>
  <div class="w-full">
      <button @click.prevent="show = !show" class="px-12 py-8 text-center bg-blue-800 text-orange-300 font-bold text-lg sm:text-xl rounded-lg uppercase glow-orange w-full">
          {{btn_text}}
      </button>
      <transition name="modal">
      <div v-if="show" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
           
            <div class="fixed inset-0 transition-opacity">
                <div @click.prevent="show = !show" class="absolute inset-0 bg-gray-900 opacity-75"></div>
            </div>

            <!-- important - This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;

            <div class="inline-block align-bottom bg-gray-400 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="flex justify-end sm:hidden">
                    <button class="hover:underline text-gray-700 font-semibold" @click.prevent="show = !show">close</button>
                </div>



                <slot></slot>



            </div>
        </div>
      </div>
      </transition>
  
  </div>
</template>

<script>
export default {
    name: 'ModalButton',
    props:{
        btn_text: String,
    },
    data(){
        return{
            show: false
        }
    }
}
</script>

<style>


.modal-enter-active, .modal-leave-active {
  transition: opacity .3s;
}
.modal-enter, .modal-leave-to {
  opacity: 0;
}
</style>