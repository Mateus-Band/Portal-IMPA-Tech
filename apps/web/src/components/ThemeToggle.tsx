import { useEffect, useState } from "react";

export default function ThemeToggle() {
  const [dark, setDark] = useState(false);

  useEffect(() => {
    if (localStorage.theme === "dark") {
      document.documentElement.classList.add("dark");
      setDark(true);
    }
  }, []);

  function toggleTheme() {
    const newTheme = !dark;
    setDark(newTheme);

    if (newTheme) {
      document.documentElement.classList.add("dark");
      localStorage.theme = "dark";
    } else {
      document.documentElement.classList.remove("dark");
      localStorage.theme = "light";
    }
  }

  return (
    <button
      onClick={toggleTheme}
      className="px-3 py-1 rounded border border-gray-300 dark:border-gray-600 
                 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100"
    >
      {dark ? "🌙 Escuro" : "☀️ Claro"}
    </button>
  );
}
