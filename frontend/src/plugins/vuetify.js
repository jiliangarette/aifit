import { createVuetify } from 'vuetify'
import { VBtn } from 'vuetify/components/VBtn'

export default createVuetify({
  aliases: {
    MyButton: VBtn
  },
  defaults: {
    MyButton: {
      color: 'primary',
      variant: 'tonal'
    },
    VBtn: {
      color: 'secondary',
      variant: 'flat'
    },
    VCard: {
      MyButton: { color: 'secondary' },
      VBtn: { color: 'primary' }
    }
  }
})
