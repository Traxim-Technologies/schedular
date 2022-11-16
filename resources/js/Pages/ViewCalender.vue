
<!-- <script>
export default{
    event:'ViewCalender',
    data(){
       
    },
    methods:{ 
    }
}
</script> -->

<template>
  <div class="pr-4">
   
    <div class="flex justify-between items-center mb-4">
      <div class="py-0">
        <h3 class="font-bold text-lg  ">{{ currentMonthInName }} {{ currentYear }}</h3>
      </div>
      <div class="flex">
        <button @click="prev" class="w-7 h-7 rounded-md mr-2 flex justify-center items-center bg-gray-200 hover:bg-sky-300 hover:text-white ">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>

        </button>
        <button @click="next" class="w-7 h-7 rounded-md  flex justify-center items-center bg-gray-200 hover:bg-sky-300 hover:text-white ">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
        </button>
      </div>
    </div>
    <section class="calender">
      <div class="days flex ">
        <div class="w-2/12 flex justify-center items-center mb-4" v-for="(day, index) in days" :key="index">
          <p class="text-center">{{ day }}</p>
        </div>
      </div>
      <div class="date flex flex-wrap ">
        <div class="w-2/12 flex justify-center items-center mb-2 " v-for="day in startDay()" :key="day"></div>
        <div class="w-2/12 text-center flex justify-center items-center  mb-4"  v-for="date in daysInMonth(currentYear, currentMonthInNumber)"
          :key="date" ref="date" @click="getDate">
          <label class="p-2 text-base font-normal active:bg-indigo-400 active:text-white hover:cursor-pointer  bg-slate-100 hover:bg-slate-200 rounded-full w-10 h-10 flex justify-center items-center "> {{ date }}</label>
        </div>
      </div>
    </section>
    <section class="flex justify-between cursor-pointer">
      
    </section>
  </div>
</template>

<script>
export default {
  event:'ViewCalender',
  data() {
    return {
      currentMonthInNumber: new Date().getMonth(),
      currentYear: new Date().getFullYear(),
      days: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
    };
  },
  methods: {
    daysInMonth(year, month) {
      return new Date(year, month + 1, 0).getDate();
    },
    startDay() {
      return new Date(this.currentYear, this.currentMonthInNumber, 1).getDay();
    },
    next() {
      if(this.currentMonthInNumber===11){
        this.currentYear++
        this.currentMonthInNumber=0
      }else{
        this.currentMonthInNumber++;
      }
    }, prev() {
      if(this.currentMonthInNumber===0){
        this.currentYear--;
        this.currentMonthInNumber=11
      }
      else{
        this.currentMonthInNumber--;
      }
      console.log(this.currentMonthInNumber)
    },
    getDate(){
      console.log(this.$refs.date)
      return
    }
  },
  computed:{
    currentMonthInName(){
      return new Date(this.currentYear,this.currentMonthInNumber).toLocaleString("default", {month: "long"})
    }
  }
};
</script>

<style scoped>
.w-2\/12 {
  width: 14.28%;
}

</style>
