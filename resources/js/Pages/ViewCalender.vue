
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
  <div class="h-full 2xl:h-[90vh] flex items-center">
    <div
      class="flex width-hg flex-wrap justify-around w-full md:max-w-2xl lg:max-w-7xl rounded-md text-center lg:text-left md:mx-auto">
      <div
        class="w-full border rounded-md flex flex-col lg:w-2/5 pt-2 pb-8 mb-8 lg:mb-0  border-b border-r-none lg:border-r">
        <div class="flex grow-[2]">
          <div class="w-full">
            <div class="logo px-8 flex justify-center items-center lg:block mb-4">
              <img src="https://globalcloudportal.ttech.dev/public/img/doc_logo_login.png">
            </div>
            <h4 class="text-lg font-medium text-gray-500 px-8">
              Dr. Noman Khokhar</h4>
            <p class="text-lg px-8 font-medium justify-center lg:justify-start text-gray-500 flex  mr-4 lg:mr-0 mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 mt-1 mr-2 text-black">
                <path fill-rule="evenodd"
                  d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd"></path>
              </svg>
              <span class="underline">89 S E St, Porterville, CA 93257, USA</span>
            </p>
            <h2 class="text-2xl px-8 font-bold color-black mb-4 mt-2">
              Schedule the Patient
            </h2>
            <div class="pt-2 px-8 flex flex-wrap justify-center items-center lg:block">
              <p class="text-lg font-medium text-gray-500 flex items-center mr-4 lg:mr-0 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 mr-2 text-black">
                  <path fill-rule="evenodd"
                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                    clip-rule="evenodd"></path>
                </svg>
                Jennifer Patient
              </p>
              <p class="text-lg font-medium text-gray-500 flex items-center mr-4 lg:mr-0 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 mr-2 text-black">
                  <path fill-rule="evenodd"
                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                    clip-rule="evenodd"></path>
                </svg>

                (888) 888-8888
              </p>
              <p class="text-lg font-medium text-gray-500 flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 mr-2 text-black">
                  <path fill-rule="evenodd"
                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                    clip-rule="evenodd"></path>
                </svg>
                123 Main Steet, Paterson, NJ, USA
              </p>
            </div>
            <p class=" px-8 mb-4 text-sm text-center lg:text-left mt-4 font-medium border border-dotted">

            </p>
          </div>
        </div>
        <div class="flex items-end border-t w-full">
          <div class="showSelectedSlot px-4 w-full">
            <h2 class="text-2xl font-bold color-black mb-4 mt-5">
              Selected Times
            </h2>
            <div v-for="(selectedTime, index) in selectedTimeArray" :key="index"  class="border p-2 flex items-center justify-between">
              <div class="flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1" stroke="white" class="w-6 h-6 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div class="">
                  <h2 class="text-gray-700">{{selectedTime.month}} {{ selectedTime.date}} {{selectedTime.year}}, 1:15:00 am</h2>
                  <span class="text-sm text-gray-500  font-medium">Created at : 12-08-2022 22:45:22</span>
                </div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 cursor-pointer">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-2 border  rounded-md mx-auto w-full flex flex-col lg:w-3/5 pb-30">
        <div class="px-8">
          <div class="my-6">
            <h2 class="text-2xl  font-bold color-black mb-4 mt-2"> Select a Date & Time</h2>
          </div>
          <div class="w-full">
            <div class="flex">
              <div class="w-7/12 mt-2 pr-12">
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
                    <div class="w-2/12 text-center flex justify-center items-center  mb-4"  
                      v-for="date in daysInMonth(currentYear, currentMonthInNumber)"
                      :key="date" ref="date" @click="getDate(date)">
                      <label class="p-2 text-base font-normal active:bg-indigo-400 active:text-white hover:cursor-pointer  bg-slate-100 hover:bg-slate-200 rounded-full w-10 h-10 flex justify-center items-center "> {{ date }}</label>
                    </div>
                  </div>
                </section>
              </div>
              <div class="w-5/12 h-96 overflow-y-auto">
                <div v-if="timeSlotMain" class="border">
                  <div class="py-2 px-4 border-b-2 mb-4  border-gray-100">
                    <p class="text-lg font-bold text-center">{{selectedDay}}, {{ currentMonthInName }} {{currentDate}}</p>
                  </div>
                  <div class="list px-4">
                    <ul class="list-none p-0  ">
                      <li  class="mb-3 flex space-x-1"> 
                        <label @click="toggleSelect" class="transition-all flex justify-center items-center text-md font-semibold cursor-pointer border-2 text-center  py-3 rounded-md ease-in-out duration-700"
                        :class="[toggleSelectBtn ? 'w-[50%]' : 'w-full', toggleSelectBtn ? 'bg-gray-600 text-white' : 'border-indigo-600'  ]"
                        >1:00 AM
                        </label>
                        <button @click="pushTimeSLot()" v-if="toggleSelectBtn" class="transition-all cursor-pointer border-none text-white text-center bg-blue-600 py-3 rounded-md duration-700 ease-in-out font-semibold"
                        :class="[toggleSelectBtn?'w-[50%]':'w-0']"
                        >Select
                        </button>
                      </li>
                      <li class="mb-3 cursor-pointer border-2 text-center border-indigo-600  py-3 rounded-md"> 
                        <label class="flex justify-center items-center w-full text-md font-semibold cursor-pointer">3:00 AM</label>
                      </li>
                      <li class="mb-3 cursor-pointer border-2 text-center border-indigo-600  py-3 rounded-md"> 
                        <label class="flex justify-center items-center w-full text-md font-semibold cursor-pointer">8:00 AM</label>
                      </li>
                      <li class="mb-3 cursor-pointer border-2 text-center border-indigo-600  py-3 rounded-md"> 
                        <label class="flex justify-center items-center w-full text-md font-semibold cursor-pointer">9:00 AM</label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex grow items-end">
          <div class="flex w-full border-t  justify-end mt-24">
            <button class="justify-self-center m-4 justify-center items-center bg-black hover:bg-gray-900 text-white font-bold py-4 px-6 rounded">Confirm</button>
          </div>
        </div>
      </div>
    </div>
    
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
      currentDate: null,
      toggleSelectBtn:false,
      selectedDay:'',
      timeSlotMain: false,
      timeSlotArray: new Array(50).fill(0),
      selectedTimeArray:[{}]
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
      this.timeSlotMain = false;
      this.toggleSelectBtn = false;
    },
    prev() {
      if(this.currentMonthInNumber===0){
        this.currentYear--;
        this.currentMonthInNumber=11
      }
      else{
        this.currentMonthInNumber--;
      }
      this.timeSlotMain = false;
      this.toggleSelectBtn = false;
      console.log(this.currentMonthInNumber)
    },
    getDate(date){
      this.currentDate = date
      var date = new Date(new Date(this.currentYear, this.currentMonthInNumber, date).toLocaleDateString());
      this.selectedDay = date.toLocaleDateString('default', { weekday: 'long' });
      this.timeSlotMain = true;
      return
      // console.log(key,this.$refs.date)
    },
    toggleSelect(){
      this.toggleSelectBtn = true;
    },
    pushTimeSLot(){
      var newDate = new Date(); 
      let timeSlotobject = {
        month: this.currentMonthInName,
        date: this.currentDate,
        year: this.currentYear,
        createdAt: newDate.getDate() + "/"
                + (newDate.getMonth()+1)  + "/" 
                + newDate.getFullYear() + " @ "  
                + newDate.getHours() + ":"  
                + newDate.getMinutes() + ":" 
                + newDate.getSeconds(),
      }
      this.selectedTimeArray.push(timeSlotobject);
      console.log(this.selectedTimeArray);
    }
  },
  computed:{
    currentMonthInName(){
      return new Date(this.currentYear,this.currentMonthInNumber).toLocaleString("default", {month: "long"})
    },
  },
  // mounted: function (){
  //   console.log(this.timeSlotArray,this.days)
  //   let value = 0;
  //   let hours = 1;
  //   let inc = 15;
  //   this.timeSlotArray.forEach((key,value)=>{
  //     value = `${hours + ':' + inc}` ;
  //     console.log(this.timeSlotArray[key])
  //     this.timeSlotArray[key].push(value);
  //     inc += inc;
  //     if(inc == 60){
  //       hours += 1;
  //       inc = 0;
  //     }
  //   })
  //   console.log(this.timeSlotArray);
  // }
};
</script>

<style scoped>
.w-2\/12 {
  width: 14.28%;
}

</style>
