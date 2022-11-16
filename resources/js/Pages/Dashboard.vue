
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ViewCalender from './ViewCalender.vue';
</script>

<template>
	<AppLayout title="Dashboard">
		<div
			class="flex width-hg flex-wrap justify-around w-full md:max-w-2xl lg:max-w-7xl rounded-md text-center lg:text-left md:mx-auto">
			<div
				class="w-full border rounded-md flex flex-col lg:w-2/5 pt-2 pb-8 mb-8 lg:mb-0  border-b border-r-none lg:border-r">
				<div class="flex grow">
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
			</div>
			<div class="pt-2 border  rounded-md mx-auto w-full flex flex-col lg:w-3/5 pb-30">
				<div class="px-8">
					<div class="my-6">
						<h2 class="text-2xl  font-bold color-black mb-4 mt-2"> Select a Date & Time</h2>
					</div>
					<div class="flex justify-between">
						<div class="w-4/6">
							<ViewCalender />
						</div>
						<div class="w-4/12">
							<div class="px-4 ">
								<div class="py-2 border-t-2 border-b-2 mb-4  border-gray-100">
									<p class="text-lg font-bold text-center">Friday, November 18</p>
								</div>
								<div class="list">
									<ul class="list-none p-0  ">
										<li class="mb-3 cursor-pointer border-2 text-center border-indigo-600  py-2 rounded-md"> 
											<label class="flex justify-center items-center w-full text-md font-semibold cursor-pointer">1:00 AM</label>
										</li>
										<li class="mb-3 cursor-pointer border-2 text-center border-indigo-600  py-2 rounded-md"> 
											<label class="flex justify-center items-center w-full text-md font-semibold cursor-pointer">3:00 AM</label>
										</li>
										<li class="mb-3 cursor-pointer border-2 text-center border-indigo-600  py-2 rounded-md"> 
											<label class="flex justify-center items-center w-full text-md font-semibold cursor-pointer">8:00 AM</label>
										</li>
										<li class="mb-3 cursor-pointer border-2 text-center border-indigo-600  py-2 rounded-md"> 
											<label class="flex justify-center items-center w-full text-md font-semibold cursor-pointer">9:00 AM</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</AppLayout>
</template>


