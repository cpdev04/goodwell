const itemsPerPage = 6;
  let currentPage = 1;
  const members = document.querySelectorAll(".member");
  const totalPages = Math.ceil(members.length / itemsPerPage);

  function showPage(page) {
    currentPage = page;
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    members.forEach((member, index) => {
      member.parentElement.style.display = (index >= start && index < end) ? "block" : "none";
    });

    document.getElementById("page-info").textContent = `Page ${currentPage} of ${totalPages}`;
  }

  function nextPage() {
    if (currentPage < totalPages) {
      showPage(currentPage + 1);
    }
  }

  function prevPage() {
    if (currentPage > 1) {
      showPage(currentPage - 1);
    }
  }

  // On page load
  showPage(currentPage);