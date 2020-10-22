<template>
  <div>
    <div class="flex justify-center">
      <div class="p-4 w-64">
        <div class="w-full mb-4">
          <label
            for="price"
            class="block text-sm font-medium leading-5 text-gray-700"
            >House Price</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="price"
              type="number"
              v-model="calc.price"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
              placeholder="Total property Price"
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="deposit"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Total Deposit</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="deposit"
              type="number"
              v-model="calc.deposit"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
              placeholder="Total deposit paid for house"
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="grants"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Total Grants & Incentives</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="grants"
              type="number"
              v-model="calc.grants"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
              placeholder="Total of all grants, bonuses & incentives."
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="lmi"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Lenders Mortgage Insurance</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="lmi"
              type="number"
              v-model="calc.lmi"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
              placeholder="Only applicable if your deposit is less than 20%"
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="fees"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Mortgage Establishment Fees</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="fees"
              type="number"
              v-model="calc.fees"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
              placeholder="Only applicable if your deposit is less than 20%"
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="term"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Mortgage Term (years)</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="term"
              type="number"
              v-model="calc.term"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
              placeholder="Pick a term from 1-30 years."
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="rate"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Mortgage Interest Rate %</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="rate"
              type="number"
              v-model="calc.rate"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
              placeholder="Enter your expected interest rate."
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="naf"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Net Amount Financed (Total mortgage borrowed)</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <span class="px-2 form-input block w-full sm:text-sm sm:leading-5 font-bold">
              {{naf | money}}
            </span>
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="pmt"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Mortgage Repayment (monthly)</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <span class="px-2 form-input block w-full sm:text-sm sm:leading-5 font-bold">
              {{monthly_pmt | money}}
            </span>
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="extra_pmt"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Additional payments (to pay it off quicker)</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="extra_pmt"
              type="number"
              v-model="calc.extra_pmt"
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
            />
          </div>
        </div>
        <div class="w-full mb-4">
          <label
            for="new_length"
            class="block text-sm font-medium leading-5 text-gray-700"
            >Adjusted Mortgage term (years)</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              id="new_length"
              type="number"
              :value="schedule.length / 12"
              readonly
              class="px-2 form-input block w-full sm:text-sm sm:leading-5"
            />
          </div>
        </div>
      </div>
    <div>
    </div>
</div>
      




    <div class="p-4 min-w-full">
        <h1 class="font-semibold text-gray-800 text-lg">
            Mortgage Amortisation Schedule
        </h1>
      <table class="min-w-full">
        <thead>
          <tr>
            <th
              class="px-1 py-1 bg-gray-100 text-gray-600 text-left text-xs font-medium"
            >
              Month
            </th>
            <th
              class="px-3 py-1 bg-gray-100 text-gray-600 text-left text-sm font-medium"
            >
              Balance
            </th>
            <th
              class="px-3 py-1 bg-gray-100 text-gray-600 text-left text-sm font-medium"
            >
              Interest Applied
            </th>
            <th
              class="px-3 py-1 bg-gray-100 text-gray-600 text-left text-sm font-medium"
            >
              Monthly Payment
            </th>
            <th
              class="px-3 py-1 bg-gray-100 text-gray-600 text-left text-sm font-medium"
            >
              Extra Payment
            </th>
            <th
              class="px-3 py-1 bg-gray-100 text-gray-600 text-left text-sm font-medium"
            >
              Closing Balance
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(line, index) in schedule" :key="index">
            <td class="px-1 py-1 text-gray-500 whitespace-no-wrap text-sm">
              {{ line.month }}
            </td>
            <td class="px-3 py-1 text-gray-500 whitespace-no-wrap text-sm">
              {{ line.start | money }}
            </td>
            <td class="px-3 py-1 text-gray-500 whitespace-no-wrap text-sm">
              {{ line.interest | money }}
            </td>
            <td class="px-3 py-1 text-gray-500 whitespace-no-wrap text-sm">
              {{ line.pmt | money }}
            </td>
            <td class="px-3 py-1 text-gray-500 whitespace-no-wrap text-sm">
              {{ line.extra_pmt | money }}
            </td>
            <td class="px-3 py-1 text-gray-500 whitespace-no-wrap text-sm">
              {{ line.end | money }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "MortgageCalculator",
  data(){
    return {
      calc: {
        price: 500000,
        deposit: 25000,
        grants: 15000,
        lmi: 6000,
        fees: 3000,
        term: 30,
        rate: 3,
        extra_pmt: 1429,
        rv: 0,
      },
    }
  },
  
  filters: {
    money(amount) {
      return "$" + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      // return  +(Math.round(amount + "e+" + 2) + "e-" + 2);
    },
  },
  computed: {
    naf() {
      return (
        +this.calc.price -
        +this.calc.deposit -
        +this.calc.grants +
        +this.calc.fees +
        +this.calc.lmi
      );
    },
    intrate() {
      return this.calc.rate / 100;
    },
    monthly_pmt() {
      var int = this.intrate / 12;
      var y = Math.pow(1 + int, +this.calc.term * 12);
      var rvint = this.calc.rv * int;
      var pmt = (this.naf * y * int) / (y - 1) + rvint;
      return +(Math.round(pmt + "e+" + 2) + "e-" + 2);
    },
    schedule() {
      let lines = [];
      let mortgage = this.naf;
      while (mortgage > 0) {
        let start = mortgage;
        let int = (+this.intrate / 12) * mortgage;
        let interest = +(Math.round(int + "e+" + 2) + "e-" + 2);

        let pmt = this.monthly_pmt;
        let extra_pmt = this.calc.extra_pmt;
        let month = lines.length + 1;
        mortgage = mortgage + interest - pmt - extra_pmt;
        let line = {
          month: month,
          start: +(Math.round(start + "e+" + 2) + "e-" + 2),
          end: +(Math.round(mortgage + "e+" + 2) + "e-" + 2),
          interest: interest,
          pmt: pmt,
          extra_pmt: extra_pmt,
        };

        lines.push(line);
      }

      return lines;
    },
  },
};
</script>

<style>
</style>