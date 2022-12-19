
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
        <div v-if="toggleSelectedTimeSlot" class="flex items-end border-t w-full">
          <div class="showSelectedSlot px-4 w-full">
            <h2 class="text-2xl font-bold color-black mb-4 mt-5">
              Selected Times
            </h2>
            <div v-for="(selectedTime, index) in selectedTimeArray" :key="index"  class="border p-2 flex items-center justify-between">
              <div class="flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1" stroke="white" class="w-6 h-6 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div class="">
                  <h2 class="text-gray-700">{{selectedTime.month}} {{ selectedTime.date}} {{selectedTime.year}}, {{selectedTime.appointedTime}}</h2>
                  <span class="text-sm text-gray-500  font-medium">Created at : 12-08-2022 22:45:22</span>
                </div>
              </div>
              <svg v-if="hideAfterTimeSelect" @click="deleteTimeSlot(index)" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 cursor-pointer">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div v-if="hideAfterTimeSelect" class="pt-2 border  rounded-md mx-auto w-full flex flex-col lg:w-3/5 pb-30">
        <div class="px-8 mb-24">
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
                    <div class="w-2/12 text-center flex justify-center items-center  mb-4 relative"  
                      v-for="date in daysInMonth(currentYear, currentMonthInNumber)"
                      :key="date" ref="date" @click="getDateManually(date)">
                      <button 
                        :class="{
                                  'text-white bg-blue-500': ((today.getDate() === date) && (today.getMonth() === currentMonthInNumber) && (today.getFullYear() === currentYear)),
                                  'past text-gray-400': (is_past(today,currentYear,currentMonthInNumber,date,this)? true: false),
                                  'text-black': is_firstOrLastDay(date) ? true : false,
                                  'text-blue-500 font-black': is_otherDays(today,currentYear,currentMonthInNumber,date) ? true : false,
                                }
                                " 
                        :disabled="(today.valueOf() >= new Date(currentYear, currentMonthInNumber, date + 1, 0, 0, 0, 0).valueOf() || is_firstOrLastDay(date) ? true : false)"
                        :id="'date-label-' + date + '-' + currentMonthInName 
                        + '-' + currentYear + '-' + new Date(currentYear, currentMonthInNumber, date).toLocaleDateString('default', {weekday: 'long'})" 
                        class="p-2 text-base font-normal active:bg-blue-500 active:text-white hover:cursor-pointer  bg-slate-100 hover:bg-slate-200 rounded-full w-10 h-10 flex justify-center items-center"> 
                        {{ date }}
                        <span 
                        :class="
                        date == todaysDate && 
                        currentMonthInNumber == todaysMonth && 
                        currentYear == todaysYear?'block':'hidden'" 
                        class="absolute z-10 text-4xl font-black bottom-2 h-1 w-1 bg-blue-500 rounded-full"></span>
                        <span 
                          :id="'date-count-' + date + '-' + currentMonthInName 
                          + '-' + currentYear + '-' + new Date(currentYear, currentMonthInNumber, date).toLocaleDateString('default',{weekday: 'long'})" 
                          class="absolute -top-2 -right-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-black rounded-full border-2 border-white dark:border-gray-900 hidden">{{this.selectDateCount}}</span>
                      </button>
                    </div>
                  </div>
                </section>
              </div>
              <div class="w-5/12">
                <div v-if="timeSlotMain" class="border w-full">
                  <div class="py-2 px-4 border-b-2 mb-4  border-gray-100">
                    <p class="text-lg font-bold text-center">{{selectedDay}}, {{ currentMonthInName }} {{currentDate}}</p>
                  </div>
                  <div class="time-list-scroller px-4 w-full overflow-y-scroll overflow-x-hidden md:h-80 h-full">
                    <div v-if="toggleLimitation" class="w-full">
                      <ul  class="list-none p-0">
                        <li  v-for="(time, index) in timeSlotArray" :key="index" class="mb-3 flex space-x-1 "> 
                          <label :id= "'timeSlotLabel-'+index" :data-index-label = index @click="toggleSelect(index)" class="transition-all flex justify-center items-center text-md font-semibold cursor-pointer border-2 text-center  py-3 rounded-md ease-in-out duration-700 w-full border-blue-500 timeSlotLabel  hover:border-3 hover:border-black"
                          >{{time}}
                          </label>
                          <button :id= "'timeSlotBtn-'+index" :data-index-Select = index @click="pushTimeSLot(time,index)" class="timeSlotBtn transition-all cursor-pointer border-none text-white text-center bg-blue-600 py-3 rounded-md duration-700 ease-in-out font-semibold w-0"
                          >Select
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div v-if="!toggleLimitation" class="font-semibold text-xs p-2 flex flex-grow h-full items-center">
                      You have reached the maximum selected time for the appointment. You can add new time after delete one of the selected ones.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div v-if="toggleConfirmBtn" class="flex grow items-end">
          <div class="flex w-full border-t  justify-end">
            <button @click="confirmPopup = true" class="justify-self-center m-4 justify-center items-center bg-black hover:bg-gray-900 text-white font-bold py-4 px-6 rounded">Confirm</button>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <div  v-if="confirmPopup" class="h-full w-full flex items-center justify-center">
    <div @click="confirmPopup = false" class="bg-black bg-opacity-75 h-full w-full absolute inset-0"></div>
    <div class="max-w-[400px] h-fit m-auto flex items-center justify-center absolute inset-0">
      <div class="bg-white w-full p-4 rounded-lg text-center">
        <p class="mb-4 font-bold text-gray-700">Are you sure about the suggested times for this patient? You cannot change it again.</p>
        <button @click="hideAfterTimeSelect = false,confirmPopup= false" class="bg-black px-4 py-2 text-white text-sm mr-4 rounded-md">Yes Confirm</button>
        <button @click="confirmPopup= false" class="bg-gray-400 px-4 py-2 text-white text-sm rounded-md">Cancel</button>
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
      confirmPopup:false,
      hideAfterTimeSelect:true,
      timeSlotArray: [
        '1:00 AM','1:15 AM','1:30 AM','1:45 AM','2:00 AM',
        '2:15 AM','2:30 AM','2:45 AM','3:00 AM','3:15 AM',
        '3:30 AM','3:45 AM','4:00 AM','4:15 AM','4:30 AM',
        '4:45 AM','5:00 AM','5:15 AM','5:30 AM','5:45 AM',
        '6:00 AM','6:15 AM','6:30 AM','6:45 AM','7:00 AM',
        '7:15 AM','7:30 AM','7:45 AM','8:00 AM','8:15 AM',
        '8:30 AM','8:45 AM','9:00 AM','9:15 AM','9:30 AM',
        '9:45 AM','10:00 AM','10:15 AM','10:30 AM','10:45 AM',
        '11:00 AM','11:15 AM','11:30 AM','11:45 AM',
        '12:00 PM','12:15 PM','12:30 PM','12:45 PM',
        '1:00 PM','1:15 PM','1:30 PM','1:45 PM','2:00 PM',
        '2:15 PM','2:30 PM','2:45 PM','3:00 PM','3:15 PM',
        '3:30 PM','3:45 PM','4:00 PM','4:15 PM','4:30 PM',
        '4:45 PM','5:00 PM','5:15 PM','5:30 PM','5:45 PM',
        '6:00 PM','6:15 PM','6:30 PM','6:45 PM','7:00 PM',
        '7:15 PM','7:30 PM','7:45 PM','8:00 PM','8:15 PM',
        '8:30 PM','8:45 PM','9:00 PM','9:15 PM','9:30 PM',
        '9:45 PM','10:00 PM','10:15 PM','10:30 PM','10:45 PM',
        '11:00 PM','11:15 PM','11:30 PM','11:45 PM','12:00 AM',
      ],
      selectedTimeArray:[],
      toggleSelectedTimeSlot:false,
      toggleConfirmBtn:false,
      toggleLimitation:true,
      todaysDate:new Date().getDate(),
      todaysMonth:new Date().getMonth(),
      todaysYear:new Date().getFullYear(),
      previousDateElement: [],
      today:new Date(),
      selectDateCount:1,
      prevDateElementId:'',
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

      /*selected count*/
      let elements = document.querySelectorAll('.selected-date-count');
      for (let index = 0; index < elements.length; index++) {
        if(elements[index].id === this.prevDateElementId){
          elements[index].classList.add('flex');
        }
        else{
          elements[index].classList.remove('flex');
          elements[index].classList.add('hidden');
        }
      }
      /*selected count end*/

      /*selected date style*/
      let btn = document.querySelector('[selected-date]');
      console.log(btn.classList)
      btn.classList.add('border-2')
      btn.classList.add('border-blue-800');
      /*selected date style end*/
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
      // console.log(this.currentMonthInNumber);
    },
    getDateManually(date){
        /*Remove previous active dates*/
        if(this.previousDateElement !== undefined && this.previousDateElement.length > 0){
          for (let index = 0; index < this.previousDateElement.length; index++) {
            if(!this.previousDateElement[index].dateElement.hasAttribute('selected-date')){
              this.previousDateElement[index].dateElement.classList.remove('custom-date-style');
              this.previousDateElement[index].dateElement.classList.remove('bg-blue-500');
              this.previousDateElement[index].dateElement.classList.remove('text-white');
              this.previousDateElement[index].dateElement.classList.add('text-blue-500');
              this.previousDateElement[index].dateElement.classList.add('hover:bg-slate-200');
              this.previousDateElement[index].dateElement.classList.add('bg-slate-100');
            }
          }
          this.previousDateElement = [];
        }
        /*Remove previous active dates*/
  
        /*make active selected date*/
        let dayName = new Date(this.currentYear, this.currentMonthInNumber, date).toLocaleDateString('default',{weekday: 'long'});
        let id = 'date-label-' + date + '-' + this.currentMonthInName + '-' + this.currentYear + '-' + dayName;
        let dateElement = document.getElementById(id);
        dateElement.classList.remove('text-blue-500');
        dateElement.classList.remove('bg-slate-100');
        dateElement.classList.remove('hover:bg-slate-200');
        dateElement.classList.add('custom-date-style');
        dateElement.classList.add('bg-blue-500');
        dateElement.classList.add('text-white');
        this.previousDateElement.push({dayName,dateElement});
        /*make active selected date*/
  
        this.currentDate = date
        var date = new Date(new Date(this.currentYear, this.currentMonthInNumber, date).toLocaleDateString());
        this.selectedDay = date.toLocaleDateString('default', { weekday: 'long' });
        this.timeSlotMain = true;
        return
      // console.log(key,this.$refs.date)
    },
    toggleSelect(index){
      let labelArray = document.getElementsByClassName('timeSlotLabel');
      let selectBtnArray = document.getElementsByClassName('timeSlotBtn');
      for (let index = 0; index < selectBtnArray.length; index++) {
        /*label class toggles*/
        labelArray[index].classList.add('w-full');
        labelArray[index].classList.add('border-blue-500');
        labelArray[index].classList.remove('bg-gray-600');
        labelArray[index].classList.remove('text-white');
        labelArray[index].classList.remove('w-[50%]');
        /*select class toggles*/
        selectBtnArray[index].classList.add('w-0');
        selectBtnArray[index].classList.remove('w-[50%]');
        if(labelArray[index].classList.contains('selected-time')){
          labelArray[index].classList.remove('border-blue-500');
          labelArray[index].classList.add('border-black');
        }
      }
      let label = document.getElementById('timeSlotLabel-' + index);
      let selectBtn = document.getElementById('timeSlotBtn-' + index);
      /*label class toggles*/
      label.classList.remove('w-full');
      label.classList.remove('border-blue-500');
      label.classList.add('bg-gray-600');
      label.classList.add('text-white');
      label.classList.add('w-[50%]');
      /*select class toggles*/
      selectBtn.classList.remove('w-0');
      selectBtn.classList.add('w-[50%]');
    },
    pushTimeSLot(time,index){
      /*Select button disabling*/
      let selectBtn = document.getElementById('timeSlotBtn-' + index);
      selectBtn.classList.remove('bg-blue-600');
      selectBtn.classList.add('bg-black');
      selectBtn.classList.add('cursor-not-allowed');
      selectBtn.setAttribute('disabled','disabled');
      selectBtn.innerText = 'Selected';
      /*Select button disabling*/
      
      /*Select label to make active*/
      let label = document.getElementById('timeSlotLabel-' + index);
      label.classList.add('selected-time');
      /*Select label to make active*/

      this.toggleSelectedTimeSlot = true;
      this.toggleConfirmBtn = true;
      var newDate = new Date(); 
      let timeSlotobject = {
        month: this.currentMonthInName,
        date: this.currentDate,
        year: this.currentYear,
        appointedTime: time,
        dayName:new Date(this.currentYear, this.currentMonthInNumber, this.currentDate).toLocaleDateString('default',{weekday: 'long'}),
        createdAt: newDate.getDate() + "/"
                + (newDate.getMonth()+1)  + "/" 
                + newDate.getFullYear() + " @ "  
                + newDate.getHours() + ":"  
                + newDate.getMinutes() + ":" 
                + newDate.getSeconds(),
      }
      if(this.selectedTimeArray.length < 3){
        /*Change selected date style*/
        let parentLabelId = 'date-label-' + this.currentDate + '-' + this.currentMonthInName + '-' + this.currentYear + '-' + new Date(this.currentYear, this.currentMonthInNumber, this.currentDate).toLocaleDateString('default',{weekday: 'long'});
        let date_label = document.getElementById(parentLabelId);
        date_label.setAttribute('selected-date','selected');
        date_label.classList.add('bg-blue-600');
        date_label.classList.add('border-2');
        date_label.classList.add('border-blue-800');
        date_label.classList.add('text-white');
        date_label.classList.remove('hover:bg-slate-200');
        /*Change selected date style*/
        
        /*Show selected date count*/
        if(this.prevDateElementId === parentLabelId){
          this.selectDateCount++;
        }else{
          this.selectDateCount = 1;
        }
        date_label.childNodes[2].classList.remove('hidden');
        date_label.childNodes[2].classList.add('flex');
        /*Show selected date count*/

        this.selectedTimeArray.push(timeSlotobject);

        if(this.selectedTimeArray.length === 3){
          this.toggleLimitation = false;
        }

        this.prevDateElementId = parentLabelId;
      }
    },
    deleteTimeSlot(index){
      this.selectedTimeArray.forEach((value,key)=>{
        if(key === index){
          let id  = 'date-label-'+value.date+'-'+value.month+'-'+value.year+'-'+value.dayName;
          let element = document.getElementById(id);
          if(this.selectDateCount === 1){
            // this.selectDateCount --;
            element.childNodes[2].classList.remove('flex');
            element.childNodes[2].classList.add('hidden');
            element.classList.remove('border-2');
            element.classList.remove('border-blue-800');
            element.classList.remove('bg-blue-600');
            element.classList.remove('bg-blue-500');
            element.classList.remove('text-white');
            element.classList.add('bg-slate-100');
            element.classList.add('text-blue-500');
          }
          else if(this.selectDateCount === 2 || this.selectDateCount === 3){
            this.selectDateCount --;
          }
          if(this.selectedTimeArray.length >= 1){
            this.selectedTimeArray.splice(index,1);
            if(this.selectedTimeArray.length < 3){
              this.toggleLimitation = true;
            }
            if(this.selectedTimeArray.length === 0 ){
              this.toggleSelectedTimeSlot = false;
              this.toggleConfirmBtn = false;
            }
          }
          else{
            this.toggleSelectedTimeSlot = false;
            this.toggleConfirmBtn = false;
          }

          /*find ele*/
          let selectedTimeElements = document.querySelectorAll('.selected-time');
          for (let index = 0; index < selectedTimeElements.length; index++) {
            if(value.appointedTime === selectedTimeElements[index].innerText){
              /*selected time label class toggles*/
              selectedTimeElements[index].classList.add('w-full');
              selectedTimeElements[index].classList.add('border-blue-500');
              selectedTimeElements[index].classList.remove('bg-gray-600');
              selectedTimeElements[index].classList.remove('text-white');
              selectedTimeElements[index].classList.remove('w-[50%]');
              selectedTimeElements[index].classList.remove('border-black');
              selectedTimeElements[index].classList.remove('selected-time')

              /*selecteted time label (select) button class toggles*/
              selectedTimeElements[index].nextElementSibling.classList.add('w-0');
              selectedTimeElements[index].nextElementSibling.classList.add('bg-blue-600');
              selectedTimeElements[index].nextElementSibling.classList.remove('w-[50%]');
              selectedTimeElements[index].nextElementSibling.classList.remove('bg-black');
              selectedTimeElements[index].nextElementSibling.classList.remove('cursor-not-allowed');
              selectedTimeElements[index].nextElementSibling.removeAttribute('disabled');
            }
          } 
        }
      })
    },
    is_past(today, currentYear, currentMonthInNumber, date){
      if(today.valueOf() >= new Date(currentYear, currentMonthInNumber, date + 1, 0, 0, 0, 0).valueOf()){
        return true;
      }
    },
    is_firstOrLastDay(date){
      var satOrSun = new Date(new Date(this.currentYear, this.currentMonthInNumber, date).toLocaleDateString());
      const checkDay  = satOrSun.toLocaleDateString('default', { weekday: 'long' });
      if(checkDay === 'Sunday' || checkDay === 'Saturday'){
        return true;
      }
    },
    is_otherDays(today, currentYear, currentMonthInNumber, date){
      if(today.valueOf() <= new Date(currentYear, currentMonthInNumber, date + 1, 0, 0, 0, 0).valueOf()){
        var otherDays = new Date(new Date(this.currentYear, this.currentMonthInNumber, date).toLocaleDateString());
        const checkDay  = otherDays.toLocaleDateString('default', { weekday: 'long' });
        if(
          checkDay === 'Monday' || checkDay === 'Tuesday' ||
          checkDay === 'Wednesday' || checkDay === 'Thursday' ||
          checkDay === 'Friday'
        ){
          return true;
        }
      }
    },
    disableButton(){
      let allPastDates = document.querySelectorAll('.past');
      for (let index = 0; index < allPastDates.length; index++) {
        if(allPastDates[index].classList.contains('past')){
          allPastDates[index].setAttribute('disabled','disabled') 
        }
      }
    }
  },
  computed:{
    currentMonthInName(){
      return new Date(this.currentYear,this.currentMonthInNumber).toLocaleString("default", {month: "long"})
    },
  },
};
</script>

<style scoped>
.w-2\/12 {
  width: 14.28%;
}

</style>
