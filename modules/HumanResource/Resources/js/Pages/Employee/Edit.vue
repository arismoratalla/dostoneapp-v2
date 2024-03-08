<script setup>
import { ref, onMounted, watch } from 'vue'
import Header from '../Header.vue'
import Sidebar from '../Sidebar.vue'
import { useForm, usePage } from '@inertiajs/vue3'
import axios from 'axios';

const jsonData = ref([]);
const searchResults = ref({});

const { employee } = usePage().props;

const props = defineProps({
  positions: {
    type: Object
  },
  divisions: {
    type: Object
  },
  units: {
    type: Object
  },
  user_details: {
    type: Object
  },
});

const profileForm = useForm(employee);

const searchEmail = () => {
  // console.log('jsonData during search', jsonData);
  searchResults.value = jsonData.value.filter(item => item.email === employee.email);
  // console.log('filteredData', searchResults.value);
};

const fetchData = async () => {
  try {
    const response = await axios.get('/employees.json');
    jsonData.value = response.data;
    searchEmail()
    profileForm.employee_number = searchResults.value[0].emp_number
    profileForm.mobile = searchResults.value[0].mobile
  } catch (error) {
    console.error('Error fetching data:', error);
  }
};

// If employee data is not provided, search for the employee from json using email
if (employee.details === null) {
  fetchData()
}

const saveProfile = async () => {
  // processing.value = true;
  try {
      await profileForm.post(route('employee.store'), {
          onFinish: () => {
              // emit('formSubmitted');
              alert('Profile saved!')
          }
      });
  } catch (error) {
      console.error('Error submitting form:', error);
  } finally {
    // processing.value = false;
  }

};
</script>
  
<template>
  <Header title="Human Resources" />

  <div class="flex">

    <Sidebar />

    <div class="flex-1 max-w-full">
      <div class="mt-4 mx-auto sm:px-2 lg:px-4">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

          <div class="justify-center">
            <div class="p-2 lg:p-4 bg-white border-b border-gray-200">
              <h1 class="text-2xl font-medium text-gray-900">
                Profile
              </h1>
            </div>
          </div>
          
          <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Employee Details</h2>
            {{ employee.details }}
            <div v-if="employee.details">
              <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                <span class="font-large">Info alert!</span> Employee exists.
              </div>
            </div>

            <div v-else>
              <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                <span class="font-medium">Info alert!</span> Employee do not exist.
              </div>
            </div>

            <form @submit.prevent="saveProfile">
              <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Name
                  </label>
                  <input type="text" name="name" id="name"
                    v-model="profileForm.name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Fullname" 
                    required
                    >
                </div>

                <div class="w-full">
                  <label for="employee_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Employee Number
                  </label>
                  <input type="text" name="employee_number" id="employee_number"
                    v-model="profileForm.employee_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Employee Number" 
                    required
                    >
                </div>
                <div>
                  <label for="position_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Position
                  </label>
                  <select id="position_id"
                    v-model="profileForm.position_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                  >
                    <option value="">Select Position</option>
                    <option v-for="position in positions" :key="position.id" :value="position.id">
                        {{ position.name }}
                    </option>
                  </select>
                </div>

                <div>
                  <label for="division_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Division</label>
                  <select id="division_id"
                    v-model="profileForm.division_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">Select Division</option>
                    <option v-for="division in divisions" :key="division.id" :value="division.id">
                        {{ division.name }}
                    </option>
                  </select>
                </div>
                <div>
                  <label for="unit_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit</label>
                  <select id="unit_id"
                    v-model="profileForm.unit_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">Select Unit</option>
                    <option v-for="unit in units" :key="unit.id" :value="unit.id">
                        {{ unit.name }}
                    </option>
                  </select>
                </div>
                <div class="w-full">
                  <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile Number</label>
                  <input type="text" name="mobile" id="mobile" v-model="profileForm.mobile"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Mobile Number" required="">
                </div>
              </div>
              <div v-if="employee.details">
                <div class="text-right">
                  <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md mt-2" :disabled="processing">
                  <template v-if="processing">
                      <svg aria-hidden="true" class="inline w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                      <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                      </svg>
                      Processing...
                  </template>

                  <template v-else>
                      Update Profile
                  </template>
                  </button>
                </div>
              </div>

              <div v-else>
                <div class="text-right">
                  <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md mt-2" :disabled="processing">
                  <template v-if="processing">
                      <svg aria-hidden="true" class="inline w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                      <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                      </svg>
                      Processing...
                  </template>

                  <template v-else>
                      Save Profile
                  </template>
                  </button>
                </div>
              </div>

            </form>
          </div>
          <!-- </section> -->

      </div>

    </div>
  </div>
</div></template>
  