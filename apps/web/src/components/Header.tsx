import ThemeToggle from "./ThemeToggle";

export default function Header() {
  return (
    <header className="bg-impaBlue dark:bg-gray-900 text-white px-6 py-4 flex justify-between items-center shadow-md">
      <h1 className="text-xl font-semibold">Portal IMPA Tech</h1>

      <nav className="space-x-6 flex items-center">
        <a href="/" className="hover:underline">Início</a>
        <a href="/disciplines" className="hover:underline">Disciplinas</a>
        <a href="/admin" className="hover:underline">Admin</a>

        {/* Botão de tema */}
        <ThemeToggle />
      </nav>
    </header>
  );
}