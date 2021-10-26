<template>
    <div v-if="text == 'Confirm'">
      <md-button :style="[style, styleConfirm]">{{text}}</md-button>
    </div>

    <div v-else-if="text == 'Cancel'">
      <md-button :style="[style, styleConfirm, styleCancel]">{{text}}</md-button>
    </div>

    <div v-else-if="text == 'Edit'">
      <md-button :style="[style, styleEdit]">{{text}}</md-button>
    </div>

    <div v-else-if="text == 'Delete'">
      <md-button :style="[style, styleEdit, styleDelete]">{{text}}</md-button>
    </div>

    <div v-else-if="text == 'Create Account'">
      <md-button :style="[style, styleCreate]">{{text}}</md-button>
    </div>

    <div v-else-if="text == 'Add Product'">
      <md-button :style="[style, styleAddPd]">{{text}}</md-button>
    </div>

    <div v-else-if="text == 'Add New Picture'">
      <md-button :style="[style, styleAddPt]">{{text}}</md-button>
    </div>

    <div v-else-if="text == 'Book Your Table' || text == 'Book My Table' || text == 'Explore More'">
      <md-button :style="[style, styleBook]">{{text}}</md-button>
    </div>

    <div v-else>
      <md-button :style="style">{{text}}</md-button>
    </div>
</template>

<script>
export default {
    name: 'Button',
    props: {
        text: String,
        width: String,
        height: String
    },
    data() {
      return {
        style: {
          width: this.width, 
          height: this.height, 
          color: 'white', 
          background: '#e1651f', 
          borderRadius: '5px' , 
          fontSize: '18px',
          boxShadow: '0px 10px 30px rgba(64, 191, 255, 0.24)',
        },
        styleConfirm: {
          borderRadius: '6px',
        },
        styleCancel: {
          color: '#c4c4c4',
          background: 'transparent',
          border: '1px solid #c4c4c4',
        },
        styleEdit: {
          borderRadius: '50px',
          fontSize: '14px',
        },
        styleDelete: {
          background: 'black',
        },
        styleCreate: {
          borderRadius: '0px',
          fontSize: '14px',
        },
        styleAddPd: {
          borderRadius: '15px',
        },
        styleAddPt: {
          color: '#e1651f',
          background: 'white',
          boxShadow: '0px 4px 4px rgba(0, 0, 0, 0.25)',
        },
        styleBook: {
          borderRadius: '39px',
          fontSize: '14px',
        }
      }
    }
}
</script>