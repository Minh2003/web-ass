<template>
  <div class="pagination">
    <!-- <div class="pagination-item">
      <button @click="onClickFirstPage" :disabled="isInFirstPage" type="button">
        First
      </button>
    </div>

    <div class="pagination-item">
      <button
        type="button"
        @click="onClickPreviousPage"
        :disabled="isInFirstPage"
      >
        Previous
      </button>
    </div> -->

    <!-- Visible Buttons Start -->

    <div class="pagination-item" v-for="page in pages" :key="page.name">
      <button
        class="pagination-btn"
        type="button"
        @click="onClickPage(page.name)"
        :disabled="page.isDisabled"
        :class="{ active: currentPage === page.name }"
      >
        {{ page.name }}
      </button>
    </div>

    <!-- Visible Buttons End -->

    <!-- <div class="pagination-item">
      <button @click="onClickNextPage" :disabled="isInLastPage" type="button">
        Next
      </button>
    </div>

    <div class="pagination-item">
      <button @click="onClickLastPage" :disabled="isInLastPage" type="button">
        Last
      </button>
    </div> -->
  </div>
</template>

<script>
export default {
  computed: {
    startPage() {
      // When on the first page
      if (this.currentPage === 1) {
        return 1;
      }

      // When on the last page
      if (this.currentPage === this.totalPages) {
        return this.totalPages - this.maxVisibleButtons + 1;
      }

      // When inbetween
      return this.currentPage - 1;
    },
    pages() {
      const range = [];

      for (
        let i = this.startPage;
        i <=
        Math.min(this.startPage + this.maxVisibleButtons - 1, this.totalPages);
        i++
      ) {
        range.push({
          name: i,
          isDisabled: i === this.currentPage,
        });
      }

      return range;
    },
    isInFirstPage() {
      return this.currentPage === 1;
    },
    isInLastPage() {
      return this.currentPage === this.totalPages;
    },
    isPageActive(page) {
      return this.currentPage === page;
    },
  },
  props: {
    maxVisibleButtons: {
      type: Number,
      required: false,
      default: 3,
    },
    totalPages: {
      type: Number,
      required: true,
    },
    perPage: {
      type: Number,
      required: true,
    },
    currentPage: {
      type: Number,
      required: true,
    },
  },
  methods: {
    onClickFirstPage() {
      this.$emit("pagechanged", 1);
    },
    onClickPreviousPage() {
      this.$emit("pagechanged", this.currentPage - 1);
    },
    onClickPage(page) {
      this.$emit("pagechanged", page);
    },
    onClickNextPage() {
      this.$emit("pagechanged", this.currentPage + 1);
    },
    onClickLastPage() {
      this.$emit("pagechanged", this.totalPages);
    },
  },
};
</script>

<style>
.pagination {
  list-style-type: none;
  display: flex;
  justify-content: center;
}

.pagination-item {
  display: inline-block;
  margin: 5px;
}

.pagination-btn {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  font-family: "Roboto";
  font-weight: bold;
  font-size: 16px;
  background-color: #e2e8f0;
  color: #2c5282;
  border: none;
}

.active {
  background-color: #e1651f;
  color: #f7fafc;
}
</style>
