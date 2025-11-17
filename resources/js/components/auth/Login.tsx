import { Mail, Lock } from "lucide-react";
import { Avatar, AvatarFallback, AvatarImage } from "../ui/avatar";
import { Button } from "../ui/button";
import { Input } from "../ui/input";
import { Label } from "../ui/label";
import {
  Card,
  CardContent,
  CardDescription,
  CardFooter,
  CardHeader,
  CardTitle,
} from "@/components/ui/card";

function Login() {
  return (
    <>
      <div className="flex justify-center items-center min-h-screen bg-neutral-300">
        <Card className="w-full max-w-sm md:max-w-md lg:max-w-lg shadow-xl/20 rounded-xl border-4 border-zinc-200 bg-zinc-50 relative overflow-visible">
          <div className="absolute left-1/2 -translate-x-1/2 -top-8 md:-top-10">
            <Avatar className="w-16 h-16 md:w-20 md:h-20 ring-4 ring-zinc-50">
              <AvatarImage src="/images/cowboy.png" />
              <AvatarFallback>CN</AvatarFallback>
            </Avatar>
          </div>
          <CardHeader className="pt-10 pb-10 text-2xl md:text-3xl font-bold text-center tracking-normal">
            Sign In
          </CardHeader>
          <CardContent>
            <div className="grid w-full items-center gap-4">
              <div className="flex flex-col space-y-1.5">
                <Label htmlFor="email">Email</Label>
                <div className="relative">
                  <span className="absolute left-3 top-1/2 -translate-y-1/2 text-neutral-500 pointer-events-none">
                    <Mail className="w-4 h-4" />
                  </span>
                  <Input
                    className="bg-zinc-200 pl-10 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-400"
                    id="email"
                    type="email"
                    placeholder="Email"
                  />
                </div>
              </div>
              <div className="flex flex-col space-y-1.5">
                <Label htmlFor="password">Password</Label>
                <div className="relative">
                  <span className="absolute left-3 top-1/2 -translate-y-1/2 text-neutral-500 pointer-events-none">
                    <Lock className="w-4 h-4" />
                  </span>
                  <Input
                    className="bg-zinc-200 pl-10 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-400"
                    id="password"
                    type="password"
                    placeholder="Password"
                  />
                </div>
              </div>
            </div>
          </CardContent>
          <CardFooter className="pt-5 flex justify-center">
            <Button className="w-full sm:w-48 rounded-md outline-offset-2 bg-blue-500 text-white shadow-blue-500/50 outline-sky-500 focus:outline-2 transition transform duration-200 ease-in-out hover:-translate-y-0.5 hover:scale-105">
              Login
            </Button>
          </CardFooter>
        </Card>
      </div>
    </>
  );
}

export default Login;
