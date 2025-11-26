import Header from "../components/Header";
import Footer from "../components/Footer";

export default function MainLayout({ children }: { children: React.ReactNode }) {
  return (
    <>
      <Header />
      <main className="px-6 py-10 max-w-5xl mx-auto">
        {children}
      </main>
      <Footer />
    </>
  );
}
