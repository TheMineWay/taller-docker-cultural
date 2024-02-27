const checkDatabaseBtn = document.getElementById("checkDatabase");
checkDatabaseBtn.addEventListener('click', checkDatabase);

const successfulDB = document.getElementById("successfulDB");
const alreadyDB = document.getElementById("alreadyDB");

async function checkDatabase() {
    try {
        checkDatabaseBtn.setAttribute("disabled", "");

        const res = await fetch('/__api__/check-database.php');

        if (res.status === 201) {
            successfulDB.removeAttribute("hidden");
        } else {
            alreadyDB.removeAttribute("hidden");
        }
    } catch(e) {
        console.error(e);
    } finally {
        checkDatabaseBtn.remove();
    }
}